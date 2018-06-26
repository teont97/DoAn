var app = new Vue({
  el: '#app',
  data: {
    message: 'Do you wanna build a Vue app?'
  }
});

var app6 = new Vue({
  el: '#app-6',
  data: {
    message1: 'Hello Vue!'
  }
});
var app3 = new Vue({
  el: '#app-3',
  data: {
    seen: true
  }
});
var app4 = new Vue({
  el: '#app-4',
  data: {
    todos: [
      { text: 'Nguyễn Công Chí' },
      { text: '23/07/1997' },
      { text: 'Khánh Bình - Khánh Vĩnh' },
      { text: '01222424097' },
      { text: 'Nam' }
    ]
  }
})
app4.todos.push({ text: 'Nghỉ ngơi' });
var app5 = new Vue({
  el: '#app-5',
  data: {
    message: 'qua lại khách chờ sông lặng sóng'
  },
  methods: {
    reverseMessage: function () {
      this.message = this.message.split(' ').reverse().join(' ')
    }
  }
})