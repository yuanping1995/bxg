/*!
 * Remark (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
function cellStyle(value, row, index) {
  var classes = ['active', 'success', 'info', 'warning', 'danger'];

  if (index % 2 === 0 && index / 2 < classes.length) {
    return {
      classes: classes[index / 2]
    };
  }
  return {};
}

function rowStyle(row, index) {
  var classes = ['active', 'success', 'info', 'warning', 'danger'];

  if (index % 2 === 0 && index / 2 < classes.length) {
    return {
      classes: classes[index / 2]
    };
  }
  return {};
}

function scoreSorter(a, b) {
  if (a > b) return 1;
  if (a < b) return -1;
  return 0;
}

function nameFormatter(value) {
  return value + '<i class="icon wb-book" aria-hidden="true"></i> ';
}

function starsFormatter(value) {
  return '<i class="icon wb-star" aria-hidden="true"></i> ' + value;
}

function queryParams() {
  return {
    type: 'owner',
    sort: 'updated',
    direction: 'desc',
    per_page: 100,
    page: 1
  };
}

function buildTable($el, cells, rows) {
  var i, j, row,
    columns = [],
    data = [];

  for (i = 0; i < cells; i++) {
    columns.push({
      field: '字段' + i,
      title: '单元' + i
    });
  }
  for (i = 0; i < rows; i++) {
    row = {};
    for (j = 0; j < cells; j++) {
      row['字段' + j] = 'Row-' + i + '-' + j;
    }
    data.push(row);
  }
  $el.bootstrapTable('destroy').bootstrapTable({
    columns: columns,
    data: data,
    iconSize: 'outline',
    icons: {
      columns: 'glyphicon-list'
    }
  });
}

(function(document, window, $) {
  'use strict';
  
  (function() {
    // 所有订单
    $('#allOrder').bootstrapTable({
      search: true,
      pagination: true,
      showRefresh: true,
      showToggle: true,
      showColumns: true,
      pageSize: 12,
      pageList: [6, 12],
      iconSize: 'outline',
      toolbar: '#allOrderToolbar',
      icons: {
        refresh: 'glyphicon-repeat',
        toggle: 'glyphicon-list-alt',
        columns: 'glyphicon-list'
      }
    });
    // 待发货订单
    (function() {
      $('#waitSend').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#waitSendToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        }
      });
    })();
    // 待付款订单
    (function() {
      $('#waitPay').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#waitPayToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        }
      });
    })();
    // 待收货订单
    (function() {
      $('#waitGet').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#waitGetToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        }
      });
    })();
    // 待评价订单
    (function() {
      $('#waitEva').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#waitEvaToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        }
      });
    })();
    // 退货/返修订单
    (function() {
      $('#return').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#returnToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        }
      });
    })();
    // 交易完成订单
    (function() {
      $('#success').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#successToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        }
      });
    })();
    // 交易取消订单
    (function() {
      $('#cancel').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#cancelToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        }
      });
    })();

    var $result = $('#examplebtTableEventsResult');

    $('#exampleTableEvents').on('all.bs.table', function(e, name, args) {
        console.log('Event:', name, ', data:', args);
      })
      
      .on('sort.bs.table', function(e, name, order) {
        $result.text('Event: sort.bs.table');
      })
      .on('check.bs.table', function(e, row) {
        $result.text('Event: check.bs.table');
      })
      .on('uncheck.bs.table', function(e, row) {
        $result.text('Event: uncheck.bs.table');
      })
      .on('check-all.bs.table', function(e) {
        $result.text('Event: check-all.bs.table');
      })
      .on('uncheck-all.bs.table', function(e) {
        $result.text('Event: uncheck-all.bs.table');
      })
      .on('load-success.bs.table', function(e, data) {
        $result.text('Event: load-success.bs.table');
      })
      .on('load-error.bs.table', function(e, status) {
        $result.text('Event: load-error.bs.table');
      })
      .on('column-switch.bs.table', function(e, field, checked) {
        $result.text('Event: column-switch.bs.table');
      })
      .on('page-change.bs.table', function(e, size, number) {
        $result.text('Event: page-change.bs.table');
      })
      .on('search.bs.table', function(e, text) {
        $result.text('Event: search.bs.table');
      });
  })();
})(document, window, jQuery);
