<!--THIS IS ON YOUR PERSONAL GITHUB ACCOUNT-->
<x-body>

    @section('content')
        <!-- Begin Page Content -->
        <!-- Page Heading -->
        <div class="height mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $greeting }}</h1>

            <div>
                <div class="header-flex">
                    <div class="header">Live</div>
                    <div class="dots">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                </div>

                <div class="horizontal-line"></div>
            </div>

            <div class="body-container">
                <div class="flex">
                    <div class="row-header">
                        <div class="search-container">
                            <input class="search" placeholder="Type here to search" type="search">
                            <div class="search-img"><img width="20px" height="20px" src="{{ asset('img/search.png') }}"
                                    alt=""></div>
                        </div>

                        <div class="flex-items">
                            <div class="text">Sort: Recently opened
                                <span>&#8964 </span>
                            </div>
                            <div class="vertical-line"></div>
                            <div class="line-container">
                                <div class="line"></div>
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>

                            <div class="box-container">
                                <div class="box-flex">
                                    <div class="box"></div>
                                    <div class="box"></div>
                                </div>
                                <div class="box-flex">
                                    <div class="box"></div>
                                    <div class="box"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="spin hide">
                        <img width="70" height="70" src="{{ asset('img/spin.gif') }}" alt="">
                    </div>

                    <div id="row-1" class="column">
                        <div class="flex-container">
                            <h4 class="head">Frequently used processes</h4>
                        </div>

                        <div class="flex-container">
                            <div class="card-box processes">
                                <a href=" https://digitalworkplace.royalexchangeinsurance.com/view/process/General_Memo/form"
                                    target="blank">
                                    <div class="item-col col-space">
                                        <div class="icon">
                                            <img width="40" src="{{ asset('img/memo.png') }}" alt="">
                                        </div>

                                        <h6 class="head space">General Memo</h6>
                                        {{-- <img class="new-badge" width="40" src="{{ asset('img/new.png') }}" alt=""> --}}

                                        <div class="text-body box-margin">
                                            <h6 class="guide">User Guide</h6>
                                            <div class="flex-text">
                                                <div class="flex-icon">
                                                    <img width="18" src="{{ asset('img/ibook.png') }}" alt="">
                                                    <span class="guide">Written</span>
                                                </div>
                                                <div class="flex-icon">
                                                    <img width="20" src="{{ asset('img/video1.png') }}" alt="">
                                                    <span class="guide">Video</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="card-box processes">
                                <a href="https://digitalworkplace.royalexchangeinsurance.com/view/process/Book_your_Policy/form"
                                    target="blank">
                                    <div class="item-col col-space">
                                        <div class="icon">
                                            <img src="{{ asset('img/insurance-policy.png') }}" alt="">
                                        </div>
                                        {{-- <img class="new-badge" width="40"
                                        src="{{ asset('img/new.png') }}" alt=""> --}}

                                        <h6 class="head space">Book a Policy</h6>
                                        <div class="text-body box-margin">
                                            <h6 class="guide">User Guide</h6>
                                            <div class="flex-text">
                                                <div class="flex-icon">
                                                    <img width="18" src="{{ asset('img/ibook.png') }}" alt="">
                                                    <span class="guide">Written</span>
                                                </div>
                                                <div class="flex-icon">
                                                    <img width="20" src="{{ asset('img/video1.png') }}" alt="">
                                                    <span class="guide">Video</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="card-box processes">
                                <a href="https://digitalworkplace.royalexchangeinsurance.com/view/process/Claim_Process/form"
                                    target="blank">
                                    <div class="item-col col-space">
                                        <div class="icon">
                                            <img width="40" src="{{ asset('img/approval.png') }}" alt="">
                                        </div>
                                        {{-- <img class="new-badge" width="40"
                                        src="{{ asset('img/new.png') }}" alt=""> --}}

                                        <h6 class="head space">MEC Approval</h6>
                                        <div class="text-body box-margin">
                                            <h6 class="guide">User Guide</h6>
                                            <div class="flex-text">
                                                <div class="flex-icon">
                                                    <img width="18" src="{{ asset('img/ibook.png') }}"
                                                        alt="">
                                                    <span class="guide">Written</span>
                                                </div>
                                                <div class="flex-icon">
                                                    <img width="20" src="{{ asset('img/video1.png') }}"
                                                        alt="">
                                                    <span class="guide">Video</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="card-box processes">
                                <a href="https://digitalworkplace.royalexchangeinsurance.com/view/process/Marketing_and_Other_Expenses/form"
                                    target="blank">
                                    <div class="item-col col-space">
                                        <div class="icon">
                                            <img width="40" src="{{ asset('img/marketing.png') }}" alt="">
                                        </div>
                                        {{-- <img class="new-badge" width="40"
                                        src="{{ asset('img/new.png') }}" alt=""> --}}

                                        <h6 style="font-size: 11.5px" class="head space">Marketing and other Expenses
                                            (BAU) </h6>
                                        <div class="text-body box-margin">
                                            <h6 class="guide">User Guide</h6>
                                            <div class="flex-text">
                                                <div class="flex-icon">
                                                    <img width="18" src="{{ asset('img/ibook.png') }}"
                                                        alt="">
                                                    <span class="guide">Written</span>
                                                </div>
                                                <div class="flex-icon">
                                                    <img width="20" src="{{ asset('img/video1.png') }}"
                                                        alt="">
                                                    <span class="guide">Video</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="card-box processes">
                                <a href="https://digitalworkplace.royalexchangeinsurance.com/view/process/Commission_Payable/form"
                                    target="blank">
                                    <div class="item-col col-space">
                                        <div class="icon">
                                            <img width="40" src="{{ asset('img/cash.png') }}" alt="">
                                        </div>
                                        {{-- <img class="new-badge" width="40"
                                        src="{{ asset('img/new.png') }}" alt=""> --}}

                                        <h6 class="head space">Commission Payable</h6>
                                        <div class="text-body box-margin">
                                            <h6 class="guide">User Guide</h6>
                                            <div class="flex-text">
                                                <div class="flex-icon">
                                                    <img width="18" src="{{ asset('img/ibook.png') }}"
                                                        alt="">
                                                    <span class="guide">Written</span>
                                                </div>
                                                <div class="flex-icon">
                                                    <img width="20" src="{{ asset('img/video1.png') }}"
                                                        alt="">
                                                    <span class="guide">Video</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="card-box processes">
                                <a href="https://digitalworkplace.royalexchangeinsurance.com/view/process/IT_Resource_Access/form"
                                    target="blank">
                                    <div class="item-col col-space">
                                        <div class="icon">
                                            <img width="40" src="{{ asset('img/access.png') }}" alt="">
                                        </div>
                                        {{-- <img class="new-badge" width="40"
                                        src="{{ asset('img/new.png') }}" alt=""> --}}

                                        <h6 class="head space">IT Resource Access</h6>
                                        <div class="text-body box-margin">
                                            <h6 class="guide">User Guide</h6>
                                            <div class="flex-text">
                                                <div class="flex-icon">
                                                    <img width="18" src="{{ asset('img/ibook.png') }}"
                                                        alt="">
                                                    <span class="guide">Written</span>
                                                </div>
                                                <div class="flex-icon">
                                                    <img width="20" src="{{ asset('img/video1.png') }}"
                                                        alt="">
                                                    <span class="guide">Video</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="card-box processes">
                                <a href="https://digitalworkplace.royalexchangeinsurance.com/view/process/Claim_Notification/form"
                                    target="blank">
                                    <div class="item-col col-space">
                                        <div class="icon">
                                            <img width="40" src="{{ asset('img/claim.png') }}" alt="">
                                        </div>
                                        {{-- <img class="new-badge" width="40"
                                        src="{{ asset('img/new.png') }}" alt=""> --}}

                                        <h6 class="head space"> Claim Notification</h6>
                                        <div class="text-body box-margin">
                                            <h6 class="guide">User Guide</h6>
                                            <div class="flex-text">
                                                <div class="flex-icon">
                                                    <img width="18" src="{{ asset('img/ibook.png') }}"
                                                        alt="">
                                                    <span class="guide">Written</span>
                                                </div>
                                                <div class="flex-icon">
                                                    <img width="20" src="{{ asset('img/video1.png') }}"
                                                        alt="">
                                                    <span class="guide">Video</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="card-box processes">
                                <a href="https://digitalworkplace.royalexchangeinsurance.com/view/process/Investment_Approval_Request/form"
                                    target="blank">
                                    <div class="item-col col-space">
                                        <div class="icon">
                                            <img width="40" src="{{ asset('img/investment.png') }}" alt="">
                                        </div>
                                        <img class="soon-badge" width="60" src="{{ asset('img/soon.png') }}"
                                            alt="">

                                        <h6 class="head space"> Investment Approval</h6>
                                        <div class="text-body box-margin">
                                            <h6 class="guide">User Guide</h6>
                                            <div class="flex-text">
                                                <div class="flex-icon">
                                                    <img width="18" src="{{ asset('img/ibook.png') }}"
                                                        alt="">
                                                    <span class="guide">Written</span>
                                                </div>
                                                <div class="flex-icon">
                                                    <img width="20" src="{{ asset('img/video1.png') }}"
                                                        alt="">
                                                    <span class="guide">Video</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>



                        </div>

                    </div>


                    <div id="row-2" class="column">
                        <div class="flex-container">
                            <h4 class="head">Business solutions</h4>
                        </div>



                        <div class="flex-container">

                            <div class="card-box apps">
                                <a href="https://digitalworkplace.royalexchangeinsurance.com/" target="blank">

                                    <div class="item-col">
                                        <div class="icon">
                                            <img width="40" src="{{ asset('img/desk.png') }}" alt="">
                                        </div>
                                        <h6 class="head">My Workplace</h6>
                                        <div class="text-body"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-box apps">
                                <a href="https://helpdesk.royalexchangeinsurance.com/" target="blank">
                                    <div class="item-col">
                                        <div class="icon">
                                            <img width="40" src="{{ asset('img/service.png') }}" alt="">
                                        </div>
                                        <h6 class="head">IT Service Management</h6>
                                        <div class="text-body">Use this solution to log an IT issue/make an IT request
                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="card-box apps">
                                <a href="http://192.168.10.21:8080/docushare/dsweb/HomePage" target="blank">
                                    <div class="item-col">
                                        <div class="icon">
                                            <img width="40" src="{{ asset('img/document.png') }}" alt="">
                                        </div>
                                        <h6 style="font-size: 11px" class="head">Enterprise Document Management System
                                            (EDMS)</h6>
                                        <div class="text-body">Access information and uploaded documents</div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-box apps">
                                <a href="https://royalexchangeinsurance.sharepoint.com/sites/ERM/SitePages/CORPORATE-POLICIES.aspx"
                                    target="blank">
                                    <div class="item-col">
                                        <div class="icon">
                                            <img width="40" src="{{ asset('img/corp-policy.png') }}" alt="">
                                        </div>
                                        <h6 class="head">Corporate Policies </h6>
                                        <div class="text-body">Access all relevant corporate policies</div>
                                    </div>
                                </a>
                            </div>

                            <div id="comm-card" class="card-box apps">
                                <div class="item-col">
                                    <div class="icon">
                                        <img width="40" src="{{ asset('img/collaboration.png') }}" alt="">
                                    </div>
                                    <h6 style="font-size: 11px" class="head">Communication and Collaboration</h6>
                                    <div class="text-body">
                                        Use this tool to enable you do communication/collaborations via
                                        mail, teams, yammer e.t.c
                                    </div>
                                </div>
                            </div>

                            <div class="card-box apps">
                                <div class="item-col">
                                    <div class="icon">
                                        <img width="40" src="{{ asset('img/network.png') }}" alt="">
                                    </div>
                                    <h6 class="head">Network Monitoring Solution</h6>
                                    <div class="text-body"></div>
                                </div>
                            </div>

                            <div class="card-box apps">
                                <div class="item-col">
                                    <div class="icon">
                                        <img width="40" src="{{ asset('img/customer.png') }}" alt="">
                                    </div>
                                    <img class="soon-badge" width="60" src="{{ asset('img/soon.png') }}"
                                        alt="">
                                    <h6 style="font-size: 11px" class="head">Customer Relationship Management (CRM)</h6>
                                    <div class="text-body">Use this solution to manage your customer engagements</div>
                                </div>
                            </div>

                            <div class="card-box apps">
                                <div class="item-col">
                                    <div class="icon">
                                        <img width="40" src="{{ asset('img/hr.png') }}" alt="">
                                    </div>
                                    <img class="soon-badge" width="60" src="{{ asset('img/soon.png') }}"
                                        alt="">
                                    <h6 class="head"> Resources Management (Human)</h6>
                                    <div class="text-body">Use this solution to access staff performance, training and
                                        welfare e.t.c</div>
                                </div>
                            </div>

                            <div class="card-box apps">
                                <div class="item-col">
                                    <div class="icon">
                                        <img width="40" src="{{ asset('img/material.png') }}" alt="">
                                    </div>
                                    <img class="soon-badge" width="60" src="{{ asset('img/soon.png') }}"
                                        alt="">
                                    <h6 class="head">Resource Management (Material)</h6>
                                    <div class="text-body">Use this solution to manage Fleet, Asset e.t.c</div>
                                </div>
                            </div>

                            <div class="card-box apps">
                                <div class="item-col">
                                    <div class="icon">
                                        <img width="40" src="{{ asset('img/loss.png') }}" alt="">
                                    </div>
                                    <img class="soon-badge" width="60" src="{{ asset('img/soon.png') }}"
                                        alt="">
                                    <h6 class="head">Pre-loss and Post-loss Survey</h6>
                                    <div class="text-body">Use this tool to manage preloss\postloss survey</div>
                                </div>
                            </div>


                            <div class="card-box apps">
                                <div class="item-col">
                                    <div class="icon">
                                        <img width="40" src="{{ asset('img/decision.png') }}" alt="">
                                    </div>
                                    <img class="soon-badge" width="60" src="{{ asset('img/soon.png') }}"
                                        alt="">
                                    <h6 class="head">Decision Support</h6>
                                    <div class="text-body">Use this resource to enable you gain visibility to the business
                                        performance and intelligence</div>
                                </div>
                            </div>

                            <div class="card-box apps">
                                <div class="item-col">
                                    <div class="icon">
                                        <img width="40" src="{{ asset('img/risk.png') }}" alt="">
                                    </div>
                                    <img class="soon-badge" width="60" src="{{ asset('img/soon.png') }}"
                                        alt="">
                                    <h6 class="head">Enterprise Risk Management</h6>
                                    <div class="text-body">Use this solution to manage business risk and reporting</div>
                                </div>
                            </div>

                            <div class="card-box apps">
                                <div class="item-col">
                                    <div class="icon">
                                        <img width="40" src="{{ asset('img/audit.png') }}" alt="">
                                    </div>
                                    <img class="soon-badge" width="60" src="{{ asset('img/soon.png') }}"
                                        alt="">
                                    <h6 class="head">Audit Management</h6>
                                    <div class="text-body">Regic enterprise is protected by Sophos</div>
                                </div>
                            </div>
                        </div>



                    </div>



                    {{-- SEARCH RESULTS --}}



                    <div id="process" class="column hide">
                        <div class="flex-container">
                            <h4 class="head">Frequently used processes</h4>
                        </div>

                        <div id="flex-process" class="flex-container">

                        </div>

                    </div>


                    <div id="app" class="column hide">
                        <div class="flex-container">
                            <h4 class="head">Business solutions</h4>
                        </div>



                        <div id="flex-app" class="flex-container">

                        </div>

                    </div>

                    <div class="nothing hide">
                        <div class="emptystate--6977f826 medium--3834064e undefined" data-component="emptystate">
                            <svg class="img"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="160" height="160" viewBox="0 0 160 160">
                                <defs>
                                    <linearGradient id="artwork_svg__b" x1="50%" x2="50%" y1="35.673%"
                                        y2="100%">
                                        <stop offset="0%" stop-color="#FFF"></stop>
                                        <stop offset="100%" stop-color="#FFF" stop-opacity="0.158"></stop>
                                    </linearGradient>
                                    <linearGradient id="artwork_svg__d" x1="50%" x2="50%" y1="35.673%"
                                        y2="100%">
                                        <stop offset="0%" stop-color="#FFF"></stop>
                                        <stop offset="100%" stop-color="#FFF" stop-opacity="0.158"></stop>
                                    </linearGradient>
                                    <linearGradient id="artwork_svg__e" x1="132.053%" x2="16.568%" y1="46.083%"
                                        y2="56.388%">
                                        <stop offset="0%" stop-color="#A8C3FF"></stop>
                                        <stop offset="100%" stop-color="#6F90FF"></stop>
                                    </linearGradient>
                                    <linearGradient id="artwork_svg__f" x1="72.405%" x2="50%" y1=".53%"
                                        y2="85.172%">
                                        <stop offset="0%" stop-color="#BDC8D4"></stop>
                                        <stop offset="100%" stop-color="#8897A9"></stop>
                                    </linearGradient>
                                    <linearGradient id="artwork_svg__g" x1="72.405%" x2="50%" y1="-6.3%"
                                        y2="90.028%">
                                        <stop offset="0%" stop-color="#BDC8D4"></stop>
                                        <stop offset="100%" stop-color="#8897A9"></stop>
                                    </linearGradient>
                                    <linearGradient id="artwork_svg__h" x1="72.405%" x2="50%" y1="3.537%"
                                        y2="83.033%">
                                        <stop offset="0%" stop-color="#BDC8D4"></stop>
                                        <stop offset="100%" stop-color="#8897A9"></stop>
                                    </linearGradient>
                                    <linearGradient id="artwork_svg__i" x1="73.522%" x2="38.773%" y1="40.295%"
                                        y2="15.87%">
                                        <stop offset="0%" stop-color="#A8C3FF"></stop>
                                        <stop offset="100%" stop-color="#6F90FF"></stop>
                                    </linearGradient>
                                    <linearGradient id="artwork_svg__j" x1="111.059%" x2="50%" y1="18.3%"
                                        y2="100%">
                                        <stop offset="0%" stop-color="#FFDFC9"></stop>
                                        <stop offset="100%" stop-color="#FB9"></stop>
                                    </linearGradient>
                                    <linearGradient id="artwork_svg__k" x1="132.053%" x2="10.132%" y1="46.083%"
                                        y2="-13.764%">
                                        <stop offset="0%" stop-color="#A8C3FF"></stop>
                                        <stop offset="100%" stop-color="#6F90FF"></stop>
                                    </linearGradient>
                                    <linearGradient id="artwork_svg__l" x1="119.205%" x2="50%" y1="18.3%"
                                        y2="100%">
                                        <stop offset="0%" stop-color="#FFDFC9"></stop>
                                        <stop offset="100%" stop-color="#FB9"></stop>
                                    </linearGradient>
                                    <linearGradient id="artwork_svg__m" x1="13.963%" x2="63.958%" y1="16.543%"
                                        y2="85.163%">
                                        <stop offset="0%" stop-color="#CB9577"></stop>
                                        <stop offset="100%" stop-color="#966060"></stop>
                                    </linearGradient>
                                    <circle id="artwork_svg__a" cx="80" cy="80" r="80"></circle>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <mask id="artwork_svg__c" fill="#fff">
                                        <use xlink:href="#artwork_svg__a"></use>
                                    </mask>
                                    <use fill="#DDE5E9" fill-opacity="0.433" xlink:href="#artwork_svg__a"></use>
                                    <path fill="url(#artwork_svg__b)"
                                        d="M152.837 0c12.25 0 22.18 9.691 22.18 21.646 0 .577-.022 1.149-.068 1.715 7.612 3.428 12.896 10.944 12.896 19.664 0 11.955-9.93 21.646-22.18 21.646-6.714 0-12.731-2.91-16.798-7.51-3.88 5.064-10.943 7.51-19.012 7.51-10.308 0-18.973-3.99-21.462-12.331a20.79 20.79 0 01-1.253.038c-10.627 0-19.242-8.255-19.242-18.439S96.513 15.5 107.14 15.5h.076c.833-8.693 8.378-15.5 17.561-15.5 5.203 0 9.88 2.184 13.107 5.659l.008-.008C141.834 2.141 147.079 0 152.837 0z"
                                        mask="url(#artwork_svg__c)"></path>
                                    <path fill="url(#artwork_svg__d)"
                                        d="M36.95 6.948c6.419 0 11.623 5.079 11.623 11.344 0 .303-.012.603-.036.9 3.99 1.796 6.759 5.735 6.759 10.304 0 6.265-5.205 11.344-11.624 11.344-3.519 0-6.672-1.525-8.803-3.935-2.034 2.653-5.735 3.935-9.964 3.935-5.402 0-9.943-2.092-11.248-6.463-.217.014-.436.02-.656.02-5.57 0-10.084-4.326-10.084-9.663 0-5.337 4.515-9.663 10.084-9.663h.04c.436-4.556 4.39-8.123 9.203-8.123a9.352 9.352 0 016.87 2.966 11.732 11.732 0 017.835-2.966z"
                                        mask="url(#artwork_svg__c)"></path>
                                    <g mask="url(#artwork_svg__c)">
                                        <path fill="#CCD3DC"
                                            d="M146.55 80.707c-22.137-.204-47.296 17.409-61.166 21.676-9.8 3.016-28.965 6.6-57.498 10.755 53.848 24.656 94.556 36.895 122.124 36.716 27.568-.18 43.564-17.426 47.99-51.738-20.116-11.475-37.266-17.278-51.45-17.409z">
                                        </path>
                                        <path fill="#DAE0E6"
                                            d="M169.962 117.274c-47.151 73.037-86.05 109.555-116.694 109.555-30.644 0-72.501-38.331-125.57-114.994 23.104-16.63 47.894-29.002 74.37-37.116 29.187-8.944 52.505 13.082 100.811 34.312 12.867 5.655 35.228 8.403 67.083 8.243z">
                                        </path>
                                    </g>
                                    <g mask="url(#artwork_svg__c)">
                                        <path fill="url(#artwork_svg__e)"
                                            d="M24.9 59.471c9.016 4.19 15.67 6.309 19.964 6.356 8.94-.424 27.183-22.98 29.916-26.225-.004-2.647-1.377-4.495-4.122-5.545-15.355 13.328-24.42 19.273-27.196 17.835-2.775-1.437-6.992-4.886-12.652-10.346-2.756 1.575-4.505 3.44-5.248 5.598-.742 2.158-.963 6.267-.662 12.327z"
                                            transform="rotate(-22 175.842 25.283)"></path>
                                        <path fill="url(#artwork_svg__f)"
                                            d="M.535 3.806h13.678c.296 0 .535.24.535.535v11.3c0 .295-.24.535-.535.535H.535A.536.536 0 010 15.641V4.34c0-.295.24-.535.535-.535z"
                                            transform="rotate(-6 615.764 -609.699)"></path>
                                        <path fill="#7C8A9B"
                                            d="M82.205 62.438l16.442-1.728a.536.536 0 01.588.476l1.421 13.525a.536.536 0 01-.476.588l-16.442 1.728a.535.535 0 01-.588-.476l-1.422-13.526a.535.535 0 01.477-.587z">
                                        </path>
                                        <path fill="url(#artwork_svg__g)"
                                            d="M16.235 1.903h17.009c.295 0 .535.24.535.535v15.106c0 .295-.24.535-.535.535H16.235a.536.536 0 01-.535-.535V2.438c0-.295.24-.535.535-.535z"
                                            transform="rotate(-6 615.764 -609.699)"></path>
                                        <path fill="#7C8A9B"
                                            d="M100.648 58.826l21.647-2.275a.535.535 0 01.588.477l1.755 16.702a.536.536 0 01-.476.588l-21.647 2.276a.535.535 0 01-.588-.477l-1.755-16.702a.535.535 0 01.476-.588z">
                                        </path>
                                        <path fill="url(#artwork_svg__h)"
                                            d="M35.265 0h21.923c.228 0 .431.144.506.36a29.097 29.097 0 011.62 9.6c0 3.286-.54 6.506-1.62 9.66a.536.536 0 01-.507.362H35.265a.536.536 0 01-.535-.535V.535c0-.295.24-.535.535-.535z"
                                            transform="rotate(-6 615.764 -609.699)"></path>
                                        <g>
                                            <path fill="#FAB795"
                                                d="M41.202 85.333l10.428 4.892c.193 3.463.954 6.918 2.284 10.364.863 4.897 1.117 8.095.76 9.593l-8.668 1.528c-3.616-4.507-5.736-8.529-6.36-12.065.646-3.235 1.164-8.005 1.556-14.311z">
                                            </path>
                                            <path fill="url(#artwork_svg__i)"
                                                d="M22.396 29.136a14.337 14.337 0 0113.597 7.526c2.345 4.37 3.777 8.062 4.295 11.073 1.607 9.34.578 10.285.578 21.638 0 7.568.854 20.116 2.562 37.643-4.62 1.727-10.95 2.59-18.989 2.59-8.039 0-16.077-1.926-24.116-5.78 4.72-11.355 7.516-20.192 8.392-26.51.676-4.885 2.906-8.277 2.934-25.055.004-3.013.339-7.601 1.003-13.763a10.511 10.511 0 019.744-9.362z"
                                                transform="translate(23.697 66.553)"></path>
                                            <path fill="url(#artwork_svg__j)"
                                                d="M70.422 11.796c.405-3.104 1.206-5.69 2.401-7.76 1.793-3.103 7.53-2.408 8.327.524.43 1.585-.99 3.462-2.4 5.975-.852 1.518-1.639 4.487-2.848 4.897-1.912.649-3.74-.563-5.48-3.636z"
                                                transform="scale(-1 1) rotate(-56 50.735 206.973)"></path>
                                            <path fill="url(#artwork_svg__k)"
                                                d="M25.003 44.494c10.18 4.73 17.693 7.123 22.54 7.176 10.094-.48 30.691-25.945 33.777-29.61-.004-2.988-1.555-5.075-4.653-6.26C59.329 30.849 49.094 37.56 45.96 35.938c-3.134-1.622-7.895-5.516-14.285-11.681-3.112 1.778-5.087 3.884-5.925 6.32-.838 2.436-1.087 7.075-.748 13.918z"
                                                transform="rotate(-16 301.711 -17.295)"></path>
                                        </g>
                                        <g>
                                            <path fill="url(#artwork_svg__l)"
                                                d="M25.224 48.04c1.327 1.474 4.963-.174 10.91-4.942l3.277 1.848c.754-4.826 2.038-8.13 3.852-9.91 2.722-2.67 4.278-8.042 4.31-10.07.154-9.544-7.752-17.317-17.316-17.317S12.94 15.402 12.94 24.966c0 4.403 1.543 8.424 3.778 12.177 2.606 4.376 5.505 7.564 8.506 10.898z"
                                                transform="rotate(-48 90.485 30.138)"></path>
                                            <path fill="url(#artwork_svg__m)"
                                                d="M18.474 2.408l.036-.077a3.149 3.149 0 015.948 1.55l-.18 5.155c5.286-1.174 11.017.123 15.233 4.1 1.056 1.282 1.812 1.798 2.881 3.667-1.534 2.349-5.796 7.421-10.346 10.294-2.273 1.434-4.286-1.829-6.854.878-.649.563-1.724 2.554-1.171 8.318.186 1.949-.105 4.225-1.32 6.78-2.46-1.065-4.946-2.992-6.364-4.199-4.158-3.743-6.08-9.044-5.678-14.222L5.232 26.21a3.148 3.148 0 01-3.096-5.252 3.15 3.15 0 01-.287-5.526 3.146 3.146 0 011.124-5.287 3.148 3.148 0 013.725-4.429 3.146 3.146 0 015.685-2.17 3.15 3.15 0 016.091-1.138z"
                                                transform="translate(18.417 45.43)"></path>
                                            <path fill="#3E3E3E"
                                                d="M29.26 69.981c6.607-3.515 11.076-8.65 13.407-15.406-6.541 2.194-11.01 7.33-13.407 15.406z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="nothing-text">We couldn’t find any related information. Please try another
                                search.</div>

                        </div>
                        {{-- <img class="img-nothing" src="{{asset('img/nothing-found.webp')}}" alt=""> --}}
                    </div>

                </div>


            </div>

            <br><br><br><br>

            <!-- Content Row -->
            <div class="row">
                <!-- Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Royal Exchange General Insurance {{ date('Y') }}</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>



            <div id="modal" class="moda hide">
                <h5></h5>
                <div class="close">+</div>
                <div class="soon-img">
                    <img class="img" width="200" src="{{ asset('img/comingsoon.jpg') }}" alt="">
                </div>
            </div>

            <div id="comm" class="comms hide">
                <h5>Communication and Collaboration</h5>
                <div class="close">+</div>
                <div>
                    <ul class="flex-comm">
                        <a href="https://teams.microsoft.com/" target="blank"><img src="{{ asset('img/teams.png') }}" alt="">
                            <li>Microsoft Teams</li>
                        </a>
                        <a href="https://outlook.office.com/mail/" target="blank"><img src="{{ asset('img/outlook.png') }}" alt="">
                            <li>Microsoft Outlook</li>
                        </a>
                        <a href="https://www.yammer.com/login" target="blank"><img src="{{ asset('img/yammer.png') }}" alt="">
                            <li>Microsoft Yammer</li>
                        </a>
                    </ul>
                </div>
            </div>



        </div>
    @endsection
</x-body>
<style>
    .abs{
        position: fixed;
        bottom: 30px;
        right: 10px;
        cursor: pointer;
    }
    #overlay{
        background-color: #000;
        position: fixed;
        opacity: 0.4;
        width: 100%;
        height: 100vh;
        top: 0;
        left: 0;
        z-index: 600;
    }
    .bottom {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
    }
    ul a li {
        list-style: none;
        padding: 15px 10px;
        font-size: 14px;
        text-decoration: underline;
        /* color: #000; */
    }

    ul.flex-comm a {
        display: flex;
    }

    ul.flex-comm {
        padding: 15px;
    }

    .comms h5 {
        color: #000;
        font-size: 16px;
        margin: 0 20px;
    }


    .nothing {
        display: flex;
        flex-direction: column;
        margin:30px auto;
        width: 60%;
        height: 300px;
        background-color: #fff;
        padding: 30px;
        border-radius: 5px;
    }
    @media(max-width:768px){
        .nothing {
        width: 90%;
    }
    }
    svg.img{
        display: block;
        margin: auto;
    }
    .nothing-text{
        margin: 20px;
        text-align: center;
        color: #000;
        font-weight: 600;
        font-size: 14px;
    }
    /* .footer{
        position: absolute;
        bottom: 10px;
        transform: translateX(-50%);
        left: 50%;
    } */
    .close {
        position: absolute;
        top: 3%;
        right: 6%;
        font-size: 40px;
        color: rgb(2, 2, 2);
        transform: rotate(-45deg);
        cursor: pointer;
    }

    .spin {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translateX(-50%);
    }

    .soon-img {
        margin-top: 20px;
    }

    .img {
        margin: auto;
        display: block;
    }



    #comm-card {
        cursor: pointer;
    }


    .hide {
        display: none;
    }

    .new-badge {
        position: absolute;
        right: -32px;
        top: -24px;
        /* transform: rotate(40deg);
        width:50px; */
    }

    .soon-badge {
        position: absolute;
        right: -28px;
        top: -13px;
        width: 50px;
    }

    .flex-text {
        display: flex;
    }

    .flex-icon {
        margin: 0 35px 0 0;
    }

    h6.space {
        margin-bottom: 0px !important;
    }

    .item-col {
        margin: 10px 20px;
        position: relative;
    }

    .box-margin {
        border: 1px solid #e4e4f3;
        border-radius: 5px;
        padding: 3px 10px;

        background-color: #ebebf5;
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.3)
    }

    .effect {
        position: relative;
        /* transition: 0.4s; */
        transform: translateY(-15px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        animation: shake 0.8s ease-out;
    }

    @keyframes shake {
        0% {
            transform: rotate(0deg) translateY(-15px);
        }

        35% {
            transform: rotate(5deg) translateY(-15px);
        }

        70% {
            transform: rotate(-5deg) translateY(-15px);
        }

        100% {
            transform: rotate(0deg) translateY(-15px);
        }


    }

    @media(min-width:768px){
        .comms {
        padding: 20px 0;
        width: 400px;
        height: 250px;
        position: fixed;
        top: 20%;
        animation: slide 0.6s ease-out forwards;
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
        z-index: 1000;
    }

        .moda {
        width: 400px;
        height: 250px;
        position: fixed;
        top: 20%;
        animation: slide 0.6s ease-out forwards;
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
        z-index: 1000;
    }

        @keyframes slide {
        0% {
            transform: translateY(-100%)  translateX(-50%);
            left: 50%;
        }

        30% {
            transform: translateY(50%) translateX(-50%);
            left: 50%;
        }

        60% {
            transform: translateY(-30%)  translateX(-50%);
            left: 50%;
        }

        100% {
            transform: translateY(0%) translateX(-50%);
            left: 50%;
        }
    }


    }
    .slide-out{
        animation: slide-out 1s ease-out forwards;
    }
    @keyframes slide-out {
        0% {
            transform: translateY(0%)  translateX(-50%);
            left: 50%;
            opacity: 0.9;
        }

        30% {
            transform: translateY(-100%) translateX(-50%);
            left: 50%;
            opacity: 0.6;
        }

        60% {
            transform: translateY(-200%)  translateX(-50%);
            left: 50%;
            opacity: 0.3;
        }

        100% {
            transform: translateY(-300%) translateX(-50%);
            display: none;
            left: 50%;
            opacity: 0;
        }
    }


    @media(max-width:768px){
        div.copyright span{
          font-size: 12px;
        }
        h4.head{
         font-size: 14px;
        }
        .moda {
        width: 300px;
        height: 250px;
        position: fixed;
        top: 20%;
        left: 50%;

        /* left: 25%; */
        transform: translateX(-42%);
        /* animation: slide 0.6s ease-out forwards; */
        /* transform: translateX(-50%); */
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
        z-index: 1000;
    }
    .comms {
        padding: 20px 0;
        width: 300px;
        height: 250px;
        position: fixed;
        top: 20%;
        left: 50%;

        /* left: 25%; */
        transform: translateX(-42%);
        animation: slide 0.6s ease-out forwards;
        /* transform: translateX(-50%); */
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
        z-index: 1000;
    }
    #overlay{
        height: 110vh;
    }
    .comms h5 {
        font-size: 14px;
    }
    }


    .col-space {
        margin-top: 8px;
    }

    .guide {
        color: #44447e;

    }

    h6.guide {
        margin-bottom: 3px;
    }

    .icon {
        margin-left: 0px;
        margin-bottom: 10px;
    }

    h6.head {
        font-size: 13px;
        color: #2e2f48;
        font-weight: 700;
    }

    h4.head {
        font-size: 20px;
        color: #2e2f48;
        font-weight: 700;
    }

    div.text-body {
        margin-top: 10px;
        font-size: 10px;
    }

    .text-body h6 {
        font-size: 11px;
        /* margin-bottom: 5px; */
    }

    /* #content {
        background: #efeff4 !important;
    } */

    #page-top{
        background-color: #efeff4;
    }

    .flex-container {
        display: flex;
        width: 95%;
        flex-wrap: wrap;
        margin-left: 2px;
        position: relative;
    }

    .column {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
        opacity: 0;
        position: relative;
        transform: translateY(200px);
    }

    .initial-position {
        opacity: 1;
        transform: translateY(0);
        transition: 1s;
    }

    .height {
        height: 100vh;
    }

    .flex-items {
        cursor: not-allowed;
    }

    .opacity {
        opacity: 0.5;
    }

    @media (max-width:600px) {
        .flex-items {
            display: none !important;
        }

        .search-container {
            width: 260px;
        }
    }
    @media (max-width:313px){
        *{
            font-size: 15px;
        }
    }
</style>

<script>
    let boxes = document.querySelectorAll('.card-box');
    let box_margin = document.querySelectorAll('.box-margin');
    let columns = document.querySelectorAll('.column');
    let guides = document.querySelectorAll('.flex-icon');
    let processes = document.querySelectorAll('.processes');
    let apps = document.querySelectorAll('.apps');
    let modal = document.querySelector('#modal');
    let overlay = document.querySelector('#overlay');
    let footer = document.querySelector('footer');
    let flex_process = document.querySelector('#flex-process');
    let flex_app = document.querySelector('#flex-app');
    let process = document.querySelector('#process');
    let app = document.querySelector('#app');
    let search = document.querySelector('.search');
    let spin = document.querySelector('.spin');
    let row_1 = document.querySelector('#row-1');
    let row_2 = document.querySelector('#row-2');
    let comm_card = document.querySelector('#comm-card');
    let comm = document.querySelector('#comm');
    let close = document.querySelectorAll('.close');
    let init = false;
    let upperCase;
    let result;

    box_margin.forEach(val=>val.addEventListener('click',function (e) {
       e.preventDefault();
    }));

    function getvalue() {
        init = !init;
        let empty_1 = true;
        let empty_2 = true;
        flex_process.innerHTML = '';
        flex_app.innerHTML = '';

        processes.forEach(val => {
            upperCase = val.textContent.toUpperCase();
            result = upperCase.includes(search.value.toUpperCase())
            if (result) {
                empty_1 = false;
                flex_process.innerHTML += val.outerHTML;
            }
        })

        apps.forEach(val => {
            upperCase = val.textContent.toUpperCase();
            result = upperCase.includes(search.value.toUpperCase())
            if (result) {
                empty_2 = false;
                flex_app.innerHTML += val.outerHTML;
            }
        })
        columns.forEach(element => {
            element.classList.remove('opacity');
        });

        // HIDE IF NOTHING WAS FOUND
        if (!empty_1) {
            process.classList.remove('hide');
        } else {
            process.classList.add('hide');
        }
        if (!empty_2) {
            app.classList.remove('hide');
        } else {
            app.classList.add('hide');
        }
        spin.classList.add('hide');
        row_1.classList.add('hide');
        row_2.classList.add('hide');

        // DISPLAY NOTHING_FOUND IMAGE IF NOTHING IS FOUND
        if (empty_1 && empty_2) {
            // alert('nothing')
            document.querySelector('.nothing').classList.remove('hide')
        }
    }

    search.addEventListener('click', function() {
        setTimeout(() => {
            if (search.value === '') {
                document.querySelector('.nothing').classList.add('hide')
                process.classList.add('hide');
                app.classList.add('hide');
                row_1.classList.remove('hide');
                row_2.classList.remove('hide');
            }
        }, 500);
    })

    search.addEventListener('keydown', function(e) {
        if (e.key === 'Backspace' && search.value === '') {
            document.querySelector('.nothing').classList.add('hide')
            process.classList.add('hide');
            app.classList.add('hide');
            row_1.classList.remove('hide');
            row_2.classList.remove('hide');
        } else if (!init) {
            document.querySelector('.nothing').classList.add('hide')
            init = !init;
            columns.forEach(element => {
                element.classList.add('opacity');
            });
            spin.classList.remove('hide');
            let timer = setTimeout(getvalue, 1500);
        } else {
            clearTimeout(timer);
            timer = setTimeout(getvalue, 1500);
        }

    })

    close.forEach(val => val.addEventListener('click', function() {
      if (screen.width>768) {
        modal.classList.add('slide-out');
        comm.classList.add('slide-out');
      }
        else{
            modal.classList.add('hide');
            comm.classList.add('hide');
        }
        overlay.classList.add('hide');
    }))

    overlay.addEventListener('click',function () {
        modal.classList.add('slide-out');
        comm.classList.add('slide-out');
        overlay.classList.add('hide');
    })

    guides.forEach(val => val.addEventListener('click', function(e) {
        e.preventDefault();
        overlay.classList.remove('hide');
        modal.classList.remove('slide-out');
        modal.classList.remove('hide');
        comm.classList.add('slide-out')
        comm.classList.add('hide')
    }))

    comm_card.addEventListener('click', function() {
        overlay.classList.remove('hide');
        comm.classList.remove('slide-out')
        comm.classList.remove('hide')
        modal.classList.add('slide-out');
        modal.classList.add('hide');
    })

    setTimeout(() => {

        columns.forEach(element => {
            element.classList.add('initial-position');
        });

    }, 500);

    boxes.forEach(element => {
        element.addEventListener('mouseenter', function() {
            element.classList.add('effect');
        })
        element.addEventListener('mouseleave', function() {
            element.classList.remove('effect');
        })
    });

    apps.forEach(element => {
        element.addEventListener('mouseenter', function() {
            element.classList.add('effect');
        })
        element.addEventListener('mouseleave', function() {
            element.classList.remove('effect');
        })
    });

    processes.forEach(element => {
        element.addEventListener('mouseenter', function() {
            element.classList.add('effect');
        })
        element.addEventListener('mouseleave', function() {
            element.classList.remove('effect');
        })
    });
</script>

{{-- <script>
let background = document.querySelector('.backg');
pictureArray = ['https://images.unsplash.com/photo-1494697536454-6f39e2cc972d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8&w=1000&q=80',
'https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?cs=srgb&dl=pexels-mike-b-170811.jpg&fm=jpg',
'https://stimg.cardekho.com/images/carexteriorimages/930x620/Bentley/Flying-Spur/7776/1645012163948/front-left-side-47.jpg?tr=h-48'
]
let count = 0;
setInterval(() => {
background.style.backgroundImage = `url(${pictureArray[count]})`;

if (count===pictureArray.length-1) {
    count = 0;
}
++count;
}, 2000);

</script> --}}

