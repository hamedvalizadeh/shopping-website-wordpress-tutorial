jQuery(function ($) {
  $.each($(".swipper-countdown-slider .discount-item"), (key, item) => {
    item = $(item);

    let slide = item.find(".sales-timer-display");
    if (slide != null && slide != undefined && slide.length > 0) {
      var dateTo = slide.attr("date-to");
      var year = dateTo.split("-")[0];
      var month = dateTo.split("-")[1];
      var day = dateTo.split("-")[2];
      var days = new Date(year, month - 1, day);
      var v = item.find(".remain-days");
      item.find(".remain-days").countdown({
        until: days,
        format: "DHMS",
        padZeroes: true,
        layout: "{dn}",
      });
      item.find(".remain-hours").countdown({
        until: days,
        format: "DHMS",
        padZeroes: true,
        layout: "{hn}",
      });
      item.find(".remain-minutes").countdown({
        until: days,
        format: "DHMS",
        padZeroes: true,
        layout: "{mn}",
      });
      item.find(".remain-seconds").countdown({
        until: days,
        format: "DHMS",
        padZeroes: true,
        layout: "{sn}",
      });
    }
  });
});
