  <!-- Sidebar  -->
  <div class="iq-sidebar">
      <div class="iq-sidebar-logo d-flex justify-content-between">
          <a href="{{route('products.index')}}" class="header-logo">
              <img src="{{ asset('admin/images/logob.png') }}" class="img-fluid rounded-normal" alt="">
              <div class="logo-title">
                  <span class="text-danger text-uppercase">ADMIN<span class="text-primary ml-1">shop</span></span>
              </div>
          </a>
          <div class="iq-menu-bt-sidebar">
              <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                      <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                      <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                  </div>
              </div>
          </div>
      </div>
      <div id="sidebar-scrollbar">
          <nav class="iq-sidebar-menu">
              <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="active active-menu">
                      <a href=""><i class="las la-house-damage"></i>trang chủ </a>

                  </li>
                  <li>
                      <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                              class="ripple rippleEffect"></span><i
                              class="las la-user-tie iq-arrow-left"></i><span>Thể loại</span><i
                              class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                          <li><a href="{{route('categories.index')}}"><i class="las la-id-card-alt"></i>Danh sách</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse"
                          aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>Sản Phẩm</span><i
                              class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                                <li><a href="{{route('products.index')}}"><i class="las la-id-card-alt"></i>Danh sách</a></li>
                            </ul>
                  </li>

                  <li>
                    <a href="#ui-elements1" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>Khách hàng</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="ui-elements1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                              <li><a href="{{route('customers.index')}}"><i class="las la-id-card-alt"></i>Danh sách</a></li>
                          </ul>
                </li>















                  <li>
                      <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse"
                          aria-expanded="false"><i class="las la-file-alt iq-arrow-left"></i><span>Pages</span><i
                              class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li>
                              <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse"
                                  aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i
                                      class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="authentication" class="iq-submenu collapse" data-parent="#pages">
                                  <li><a href="sign-in.html"><i class="las la-sign-in-alt"></i>Login</a></li>
                                  <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                                  <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover
                                          Password</a></li>
                                  <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm
                                          Mail</a></li>
                                  <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse"
                                  aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i
                                      class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="extra-pages" class="iq-submenu collapse" data-parent="#pages">
                                  <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a>
                                  </li>
                                  <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a>
                                  </li>
                                  <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                                  <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a>
                                  </li>
                                  <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error
                                          500</a></li>
                                  <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                                  <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a>
                                  </li>
                                  <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming
                                          Soon</a></li>
                                  <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse"
                          aria-expanded="false"><i class="ri-record-circle-line iq-arrow-left"></i><span>Menu
                              Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                          <li>
                              <a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>
                              <ul>
                                  <li class="menu-level">
                                      <a href="#sub-menus" class="iq-waves-effect collapsed" data-toggle="collapse"
                                          aria-expanded="false"><i
                                              class="ri-play-circle-line"></i><span>Sub-menu</span><i
                                              class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                      <ul id="sub-menus" class="iq-submenu iq-submenu-data collapse">
                                          <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a>
                                          </li>
                                          <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 2</a>
                                          </li>
                                          <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 3</a>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                          <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                          <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                      </ul>
                  </li>
              </ul>
          </nav>
          <div id="sidebar-bottom" class="p-3 position-relative">
              <div class="iq-card bg-primary rounded">
                  <div class="iq-card-body">
                      <div class="sidebarbottom-content">
                          <div class="image"><img src="{{ asset('admin/images/page-img/side-bkg.png') }}"
                                  alt=""></div>
                          <h5 class="mb-3 text-white">ĐÃ UỐNG RƯỢU BIA</h5>
                          <p class="mb-0 text-light">Không lái xe.</p>
                          {{-- <button type="submit" class="btn btn-white w-100  mt-4 text-primary viwe-more">View
                              More</button> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
