<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2016.1.112/styles/kendo.common.min.css">
  <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2016.1.112/styles/kendo.default.min.css">

  <script src="{{ mix('/js/manifest.js') }}"></script>
  <script src="{{ mix('/js/vendor.js') }}"></script>
  <script src="{{ mix('/js/app.js') }}"></script>
</head>

<body>
  <h1> header </h1>
  <input id="ddl" />
</body>
<script>
  require('jquery')

  require('kendo.dropdownlist')

  $("#dropdownlist").kendoDropDownList({
    dataTextField: "text",
    dataValueField: "value",
    dataSource: [{
      text: "Item1",
      value: "1"
    }, {
      text: "Item2",
      value: "2"
    }]
  });
</script>

</html>