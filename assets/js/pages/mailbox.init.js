/*
document.querySelectorAll('.favourite-btn').forEach(function (e) {
  e.addEventListener('click', function () {
    this.classList.toggle('active');
  });
}),
  document.addEventListener('DOMContentLoaded', function () {
    var t = document.getElementsByTagName('body')[0];
    document.querySelectorAll('.col-mail a').forEach(function (e) {
      e.addEventListener('click', function () {
        t.classList.add('email-detail-show');
      });
    }),
      document.querySelectorAll('.close-btn-email').forEach(function (e) {
        e.addEventListener('click', function () {
          t.classList.remove('email-detail-show');
        });
      });
  });
var isShowMenu = !1,
  emailMenuSidebar = document.getElementsByClassName('email-menu-sidebar');
document.querySelectorAll('.email-menu-btn').forEach(function (e) {
  e.addEventListener('click', function () {
    emailMenuSidebar.forEach(function (e) {
      e.classList.add('menubar-show'), (isShowMenu = !0);
    });
  });
}),
  window.addEventListener('click', function (e) {
    document
      .querySelector('.email-menu-sidebar')
      .classList.contains('menubar-show') &&
      (isShowMenu ||
        document
          .querySelector('.email-menu-sidebar')
          .classList.remove('menubar-show'),
      (isShowMenu = !1));
  }),
  ClassicEditor.create(document.querySelector('#email-editor'))
    .then(function (e) {
      e.ui.view.editable.element.style.height = '200px';
    })
    .catch(function (e) {
      console.error(e);
    }),
  document
    .querySelectorAll('.checkbox-wrapper-mail input')
    .forEach(function (e) {
      e.addEventListener('click', function (e) {
        1 == e.target.checked
          ? e.target.closest('li').classList.add('active')
          : e.target.closest('li').classList.remove('active');
      });
    });
// new
ClassicEditor.create(document.querySelector('#email-editor2'))
  .then(function (e) {
    e.ui.view.editable.element.style.height = '200px';
  })
  .catch(function (e) {
    console.error(e);
  }),
  document
    .querySelectorAll('.checkbox-wrapper-mail input')
    .forEach(function (e) {
      e.addEventListener('click', function (e) {
        1 == e.target.checked
          ? e.target.closest('li').classList.add('active')
          : e.target.closest('li').classList.remove('active');
      });
    });
*/
