<div class="col-12 col-lg-4">
                <div class="sidebar">
                    <div class="search-widget">
                        <form class="flex flex-wrap align-items-center">
                            <input type="search" placeholder="Search...">
                            <button type="submit" class="flex justify-content-center align-items-center">GO</button>
                        </form><!-- .flex -->
                    </div><!-- .search-widget -->

                    <div class="popular-posts">
                        <a class="b"href="/announcements"><h2>Pengumuman</h2></a>
                        <hr>
                        <ul class="p-0">
                            @foreach($announcements as $an)
                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="{{asset('images/speaker.png')}}" height="72px"alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="/announcements/{{$an->id}}">{{$an->judul}}</a></h3>

                                    <div class="posted-date">{{$an->created_at->format('d, M Y ')}}</div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div><!-- .cat-links -->
                        <div class="upcoming-events">

                            @include('fileevent.sidebarEvent')

                    
                    </div><!-- .sidebar -->
                </div><!-- .col --> 
