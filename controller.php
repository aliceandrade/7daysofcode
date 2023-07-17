<?php
function do_register(){
  render_view('register.view');
}
function do_login(){
  render_view('login.view');
};

function do_not_found(){
  http_response_code(404);
  render_view('not_found.view');
};

