@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <main class="col-8">
                <div class="ads">
                    <div class="ad">
                        <h3 class="ad_title">
                            <a href="ad/1" class="ad_link">
                                Seamlessly integrate multifunctional platforms before market-driven technologies.
                            </a>
                        </h3>
                        <div class="ad_desc">
                            Progressively plagiarize sustainable information before cutting-edge meta-services. Completely plagiarize bricks-and-clicks functionalities through low-risk high-yield content. Quickly underwhelm extensible expertise for collaborative vortals. Rapidiously reinvent global channels rather than cross-unit e-business. Proactively negotiate e-business.
                        </div>
                        <div class="ad_info">
                            <div class="created">23.09.2018</div>
                            <div class="author">User</div>
                        </div>
                    </div>
                    <div class="ad">
                        <h3 class="ad_title">
                            <a href="ad/1" class="ad_link">
                                Seamlessly integrate multifunctional platforms before market-driven technologies.
                            </a>
                        </h3>
                        <div class="ad_desc">
                            Progressively plagiarize sustainable information before cutting-edge meta-services. Completely plagiarize bricks-and-clicks functionalities through low-risk high-yield content. Quickly underwhelm extensible expertise for collaborative vortals. Rapidiously reinvent global channels rather than cross-unit e-business. Proactively negotiate e-business.
                        </div>
                        <div class="ad_info">
                            <div class="created">23.09.2018</div>
                            <div class="author">User</div>
                        </div>
                    </div>
                    <div class="ad">
                        <h3 class="ad_title">
                            <a href="ad/1" class="ad_link">
                                Seamlessly integrate multifunctional platforms before market-driven technologies.
                            </a>
                        </h3>
                        <div class="ad_desc">
                            Progressively plagiarize sustainable information before cutting-edge meta-services. Completely plagiarize bricks-and-clicks functionalities through low-risk high-yield content. Quickly underwhelm extensible expertise for collaborative vortals. Rapidiously reinvent global channels rather than cross-unit e-business. Proactively negotiate e-business.
                        </div>
                        <div class="ad_info">
                            <div class="created">23.09.2018</div>
                            <div class="author">User</div>
                        </div>
                    </div>
                    <div class="ad">
                        <h3 class="ad_title">
                            <a href="ad/1" class="ad_link">
                                Seamlessly integrate multifunctional platforms before market-driven technologies.
                            </a>
                        </h3>
                        <div class="ad_desc">
                            Progressively plagiarize sustainable information before cutting-edge meta-services. Completely plagiarize bricks-and-clicks functionalities through low-risk high-yield content. Quickly underwhelm extensible expertise for collaborative vortals. Rapidiously reinvent global channels rather than cross-unit e-business. Proactively negotiate e-business.
                        </div>
                        <div class="ad_info">
                            <div class="created">23.09.2018</div>
                            <div class="author">User</div>
                        </div>
                    </div>
                    <div class="ad">
                        <h3 class="ad_title">
                            <a href="ad/1" class="ad_link">
                                Seamlessly integrate multifunctional platforms before market-driven technologies.
                            </a>
                        </h3>
                        <div class="ad_desc">
                            Progressively plagiarize sustainable information before cutting-edge meta-services. Completely plagiarize bricks-and-clicks functionalities through low-risk high-yield content. Quickly underwhelm extensible expertise for collaborative vortals. Rapidiously reinvent global channels rather than cross-unit e-business. Proactively negotiate e-business.
                        </div>
                        <div class="ad_info">
                            <div class="created">23.09.2018</div>
                            <div class="author">User</div>
                        </div>
                    </div>
                </div>
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </main>
            <aside class="col-4">
                @guest
                    @include('auth.auth_form')
                @else
                    @include('user.info')
                @endguest
            </aside>
        </div>
    </div>
@endsection