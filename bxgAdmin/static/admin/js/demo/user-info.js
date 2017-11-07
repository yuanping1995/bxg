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
  // 用户信息表
  (function() {
    
    // 亲密关系信息
    (function() {
      $('#close').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#closeToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        },

      });
    })();
    // 删除亲密人
    // $("#closeBtn").on('click',function(){
    //   console.log($('#close').bootstrapTable('getAllSelections'));
    // });
    
    $("#closeBtn").on('click',function(){

      var id,uid;
      $.map($('#close').bootstrapTable('getSelections'), function (row,data) {
         id = row.id;
         uid = row._data.uid;
      });
      if(id === undefined){

      }else{
        $.ajax({
          type:'post',
          data:{uId:uid,arr:id},
          url:'../../../../api/Ajaxadmin/Deleteclose',
          success:function(data){
              var data = eval(data);
              if(data.state === '1111'){
                swal({
                  title: data.msg,
                  type: "success"
                });
                $('#close').bootstrapTable('remove', {field: 'id', values: id});
              }else{
                swal({
                  title: "操作失败",
                  type: "error"
                });
              }
          },
          error:function(data){

              swal({
                  title: "网络出现问题！",
                  type: "error"
              });
          }
        });
      }

      
    });
    // 保险信息表
    (function() {
      $('#insurance').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#insuranceToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        }
      });
    })();
    // 心愿信息表
    (function() {
      $('#wish').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#wishToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        }
      });
    })();
    // 订单信息表
    (function() {
      $('#order').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#orderToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        }
      });
    })();
    // 卡片信息表
    (function() {
      $('#card').bootstrapTable({
        search: true,
        pagination: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pageSize: 10,
        pageList: [5,10],
        iconSize: 'outline',
        toolbar: '#cardToolbar',
        icons: {
          refresh: 'glyphicon-repeat',
          toggle: 'glyphicon-list-alt',
          columns: 'glyphicon-list'
        }
      });
    })();
    
  })();
})(document, window, jQuery);
