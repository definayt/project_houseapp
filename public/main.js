/**
* Template Name: eStartup - v4.3.0
* Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 16
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Clients Slider
   */
  new Swiper('.screens-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      }
    },
  });

  /**
   * Initiate  glightbox 
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()


$('.modal').on('shown.bs.modal', function (e) {
  $('.your-class').slick('setPosition');
  $('.wrap-modal-slider').addClass('open');
})

$(document).ready(function(){
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 2500,
    speed: 400,
    infinite: true,
  });
});

$(document).ready(function () {  
  $('body').on('click', '.photo_progress', function (event) {
  
      event.preventDefault();
      var progress = $(this).data('id');
     
      var datas = progress.split("|");
      console.log(datas[0])
      $.get('detail/' + datas[0], function (data) {
          $('.date_progress').text(datas[1]);
          var slicker='<div class="your-class">';
          $.each(data, function() {
            $.each(this, function(k, v) {
              slicker+= '<div><img src="../../img/photo_progress/'+v.file_photo+'" class="img-fluid" alt=""><h4 class="text-center">'+v.desc+'</h4></div>';
            });
          });

          slicker += '</div>';
          document.getElementById("image-slider").innerHTML=slicker;
          $('.your-class').slick();
        
          $('.modal').on('shown.bs.modal', function (e) {
            $('.your-class').slick('setPosition');
            $('.wrap-modal-slider').addClass('open');
          })
       })
  });
  
}); 


$(document).on('click','#delete-notes',function(){
  let id = $(this).attr('data-id');
  $('#id').val(id);
});

$.ajaxSetup({
  headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
});

$('body').on('click', '.edit-notes', function (event) {
  
  event.preventDefault();
  var id = $(this).data('id');
  
  $.get('edit/' + id, function (data) {  
        $('#id_note_edit').val(data.data.id); 
       document.getElementById('description_edit').innerHTML = data.data.description;
   })
});

$('body').on('click', '.submitEditNote', function (event) {
  event.preventDefault()
  var id = $("#id_note_edit").val();
  var description = $('textarea#description_edit').val()
 
  $.ajax({
    url: 'update/' + id,
    type: "POST",
    data: {
      id: id,
      description: description,
    },
    dataType: 'json',
    success: function (data) {
        $('.formEditNotes').trigger("reset");
        $('.editNotesUser').modal('hide');
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Success',
          text: data.message,
          showConfirmButton: false,
          timer: 3000
        });
        setTimeout(function(){
          window.location.reload(true);
       }, 3000);
    },
    error: function (data) {
      console.log('Error......');
  }
});
});

$('body').on('click', '#add-notes', function (event) {
  $('.formAddNotes').trigger("reset");
});

//Save data into database
$('body').on('click', '.submitAddNote', function (event) {
  event.preventDefault()
  var id = $("#id_note").val();
  var project_id = $("#project_id").val();
  var description = $('textarea#description').val()
 
  $.ajax({
    url: "store",
    type: "POST",
    data: {
      id: id,
      description: description,
      project_id: project_id
    },
    dataType: 'json',
    success: function (data) {
        $('.formAddNotes').trigger("reset");
        $('.addNotesUser').modal('hide');
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Success',
          text: data.message,
          showConfirmButton: false,
          timer: 3000
        });
        setTimeout(function(){
          window.location.reload(true);
       }, 3000);
        
    },
    error: function (data) {
        console.log('Error......');
    }
});
});

$('body').on('click', '.delete-notes', function (event) {
  
  event.preventDefault();
  var id = $(this).data('id');
  $("#id_delete").val(id);
  
});

$('body').on('click', '.submitDeleteNotes', function (event) {
  
  event.preventDefault()
  var id = $("#id_delete").val();
  $.ajax({
    url: 'destroy/' + id,
    type: "DELETE",
    data: {
      id: id
    },
    dataType: 'json',
    success: function (data) {
        $('#deleteNotes').modal('hide');
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Success',
          text: data.message,
          showConfirmButton: false,
          timer: 3000
        });
        setTimeout(function(){
          window.location.reload(true);
       }, 3000);
        
    },
    error: function (data) {
        console.log('Error......');
    }
});
});