<?php
mysql_connect('localhost','root','');
mysql_select_db("db_rindujogja");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<title>jQuery Calendar.js Plugin Examples</title>
<link rel="stylesheet" href="css/calendar.css">
<!--
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
-->
<style type="text/css">

    html {
        font: 500 14px 'roboto';
        color: #333;
        background-color:#fafafa;
    }
    a {
        text-decoration: none;
    }
    ul, ol, li {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    #demo {
        width: 300px;
        margin: 150px auto;
    }
    p {
        margin: 0;
    }
    #dt {
        margin: 30px auto;
        height: 28px;
        width: 200px;
        padding: 0 6px;
        border: 1px solid #ccc;
        outline: none;
    } 
</style>
</head>
<body>


    <div id="demo">
        <div id="ca"></div>
        <input type="text" id="dt" placeholder="trigger calendar">
        <div id="dd"></div>
    </div>
	
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 
<script src="js/calendar.js"></script>
<script>
    $('#ca').calendar({
        // view: 'month',
        width: 320,
        height: 320,
        // startWeek: 0,
        // selectedRang: [new Date(), null],
        data: [
    {
      date: '2016-01-28',
      value: 'Available'
    },
    {
      date: '2016-01-29',
      value: 'Available'
    },
      {
      date: '2016-01-30',
      value: 'Available'
    },
    {
      date: '2016-01-31',
      value: 'Available'
    },
    {
      date: '2016-03-1',
      value: 'Available'
    },
     {
      date: '2016-02-02',
      value: 'Available'
    },
    {
      date: '2016-02-03',
      value: 'Available'
    }
  ],
        onSelected: function (view, date, data) {
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });

    $('#dd').calendar({
        trigger: '#dt',
        // offset: [0, 1],
        zIndex: 999,
        onSelected: function (view, date, data) {
            console.log('event: onSelected')
        },
        onClose: function (view, date, data) {
            console.log('event: onClose')
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });
</script>
</html>