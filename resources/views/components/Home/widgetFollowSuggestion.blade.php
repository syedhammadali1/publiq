{{-- This component has been used in home page for showing suggested people profiles --}}
@isset($skeleton)
    <div class="widget widget-who-following">
        <h3 class="widget-title skeleton skeleton-text"></h3>
        @for ($i = 0; $i < 6; $i++)
            <div class="following-item d-flex justify-content-between align-items-center">
                <a href="">
                    <span class="skeleton skeleton-img"></span>
                </a>
                <span class="name" style="margin-left: 15px !important;">
                    <span class="overflow-hiddenn  skeleton skeleton-text"></span>
                </span>
                <span class="add-friend skeleton w-25">
                    <a class="skeleton" href="#"><button class="article-view-all-btn skeleton"></button></a>
                </span>
            </div>
        @endfor
        <a class="view-member skeleton" href="">
            <div class="article-view-all skeleton ">
                <button class="article-view-all skeleton" style="width: 100%; color: white; border: none; padding: 5px 1px 5px 1px;"></button>
            </div>
        </a>
        <script>
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('frontend.render.home') }}",
                    data: {
                        'render_for': 'widgetFollowSuggestion',
                    },
                    dataType: "html",
                    success: function(response) {
                        setTimeout(function() {
                            $(".widget-who-following").replaceWith(response);
                        }, 1000);
                    }
                });
            });
        </script>
    </div>
@else
    <div class="widget widget-who-following">
        <h3 class="widget-title">Suggestions</h3>

        @isset($suggestedPeoples)
            @forelse ($suggestedPeoples as $suggestedPeople)
                <div class="following-item d-flex justify-content-between align-items-center">
                    <a href="{{ route('frontend.single.profile', $suggestedPeople->name) }}">
                        <img src="{{ $suggestedPeople->avatar }}" class="rounded-circle" alt="no image" />

                    </a>
                    <span class="name"><a href="{{ route('frontend.single.profile', $suggestedPeople->name) }}"
                            class="overflow-hiddenn">{{ @$suggestedPeople->detail->first_name }}</a></span><span
                        class="add-friend"><a
                            href="{{ route('frontend.single.profile', $suggestedPeople->name) }}">View</a></span>
                </div>

            @empty
            @endforelse

        @endisset

        <div class="article-view-all">
            <a class="view-member" href="{{ route('frontend.members') }}"><button class="article-view-all-btn">VIEW
                    ALL</button></a>
        </div>
    </div>
@endisset
