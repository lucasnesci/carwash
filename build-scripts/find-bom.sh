#!/bin/bash

if [ ! -f .last_check ]
then
   touch -t 197001010000 .last_check 
fi

find . -name .svn -prune -false -o \( -name '*.php' -o -name '*.inc' -o -name '*.module' -o -name '*.install' \) -newer .last_check | {
   ERRFOUND=
   while read
   do
      # Check for BOM in files
      test "$(head -c3 -- $REPLY)" == $'\xef\xbb\xbf' && {
         ERRFOUND=1
         echo "Found BOM in $REPLY"
      }
      
      # Skip devel modules
      [ ${REPLY#./sites/all/modules/dev} != ${REPLY} ] && continue
      [ ${REPLY#./sites/all/modules/contrib} != ${REPLY} ] && continue
       
      # Check for debug related statements
      awk -f build-scripts/remove-comments.awk $REPLY |
         grep -vE '(print_r|dpr).*, *(1|TRUE)[)]' |
         grep -E 'var_dump|(^| )(print_r|dpm|dpr) *[(]' && {
            ERRFOUND=1
            echo "Found Debug code above in $REPLY"
         } 
   done
   test -z "$ERRFOUND" && touch .last_check
}
