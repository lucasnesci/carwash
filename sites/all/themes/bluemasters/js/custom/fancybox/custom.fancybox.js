/**
 * Js for the gallery image fancybox.
 */
(function ($)  {
  function fancybox_function(context)  {
    $(document).ready(function()  {
      $('div.view-id-gallery .view-content .views-row').find('a')
        .addClass('fancybox')
        .attr("rel", "group");
      $(".fancybox").fancybox();
    });
  }

  Drupal.behaviors.carwash.fancybox = {
    attach: function(context)  {
      fancybox_function(context);
    }()
  }
}(window.jq));

/*
drupal_add_js('jq(document).ready(function () { jq("div.view-id-gallery .view-content .views-row").find("a").addClass("fancybox").attr("rel", "group"); });', array('type' => 'inline', 'scope' => 'footer', 'weight' => 5));
  drupal_add_js(path_to_theme() . '/js/custom/fancybox/jquery.fancybox.js', array('type' => 'file'));
  drupal_add_js('jq(document).ready(function () { jq(".fancybox").fancybox(); });' , array('type' => 'inline', 'scope' => 'footer', 'weight' => 6));
  */


