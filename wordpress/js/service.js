let title_dev = document.querySelector('.service-wrapper-dev-top-title');
let title_design = document.querySelector('.service-wrapper-design-top-title');
let title_consul = document.querySelector('.service-wrapper-consul-top-title');

addEventListener('scroll', function() {

  let scroll = window.scrollY;

  let dev_position = title_dev.getBoundingClientRect().top;
  let design_position = title_design.getBoundingClientRect().top;
  let consul_position = title_consul.getBoundingClientRect().top;

  if(scroll+innerHeight > dev_position+250){
    title_dev.classList.add('service-wrapper-dev-top-title-img-fadein');
  }
  if(scroll+innerHeight > design_position+250){
    title_design.classList.add('service-wrapper-design-top-title-img-fadein');
  }
  if(scroll+innerHeight > consul_position+250){
    title_consul.classList.add('service-wrapper-consul-top-title-img-fadein');
  }
});
