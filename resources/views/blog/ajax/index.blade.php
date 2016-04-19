<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="postlist">
                        @foreach($news as $entry)

                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <h3 class="pull-left">{{ $entry->title }}</h3>
                                            </div>
                                            <div class="col-sm-3">
                                                <h4 class="pull-right">
                                                    <small><em>{{ $entry->created_at->format('H:i:s j.m.Y') }}</em></small>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <a href="#" class="thumbnail">
                                        <img alt="{{ $entry->title }}" src="{{ $entry->image }}" style="height: 150px; width: 100%;">
                                    </a>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation... <a href="{{ route('blog.show', ['slug' => $entry->slug]) }}">Read more</a>
                                </div>

                                <div class="panel-footer">
                                    <span class="label label-default">Image</span> <span class="label label-default">Updates</span> <span class="label label-default">July</span>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <div class="text-center">
                        {{ $news->render() }}
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3"></div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</div>