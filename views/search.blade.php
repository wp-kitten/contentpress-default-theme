{{--
        The template to display the search results
--}}
@extends('layouts.frontend')
@inject('themeHelper', App\Themes\ContentPressDefaultTheme\ThemeHelper)


@section('title')
    <title>{{__('cpdt::m.Search for: :query_string', [ 'query_string' => cp_get_search_query()]) }}</title>
@endsection


@section('content')
    <main class="site-page page-search">

        <header class="page-subheader bg-white-smoke pt-5 pb-2 mb-5">
            <div class="container">
                {{-- FILTERS --}}
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="search-filters-wrap pt-3 pb-3 mb-4">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="search-results">
                                        <small class="text-dark">{{__('cpdt::m.Found :num_results results for:', [ 'num_results' => number_format( $numResults, 0, ',', '.') ])}}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-8">
                                    <div class="search-form-wrap">
                                        {!! cp_search_form(__('cpdt::m.Search...')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 text-right">
                                    <div class="orderby-wrap">
                                        <form id="form-filter-search" method="get" action="<?php esc_attr_e( route( 'blog.search' ) ); ?>">
                                            <input name="s" value="{{cp_get_search_query()}}" class="hidden"/>
                                            <select name="order" id="js-sort-results" data-form-id="form-filter-search">
                                                @php $selected = ('desc' == $order ? 'selected' : ''); @endphp
                                                <option value="desc" {!! $selected !!}>{{__('cpdt::m.Sort by Newest')}}</option>
                                                @php $selected = ('asc' == $order ? 'selected' : ''); @endphp
                                                <option value="asc" {!! $selected !!}>{{__('cpdt::m.Sort by Oldest')}}</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="container">
            <div class="row">
                {{-- MAIN CONTENT --}}
                <div class="col-xs-12 col-md-9">
                    {{-- POSTS GRID --}}
                    <div class="row">
                        @if($posts)
                            @foreach($posts as $post)
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <article class="loop-post mb-4">
                                        <header class="article-header">
                                            {!! $themeHelper->getPostImageOrPlaceholder($post, '', 'image-responsive') !!}
                                        </header>
                                        <section class="article-meta mt-2">
                                            <a href="{{cp_get_category_link($post->firstCategory())}}" class="text-dark">
                                                {!! $post->firstCategory()->name !!}
                                            </a>
                                            <span class="text-grey">{{cp_the_date($post)}}</span>
                                        </section>
                                        <section class="article-content mt-1">
                                            <h5 class="entry-title">
                                                <a href="{{cp_get_permalink($post)}}">
                                                    {!! wp_kses_post($post->title) !!}
                                                </a>
                                            </h5>
                                        </section>
                                    </article>
                                </div>
                            @endforeach
                        @else
                            @include('inc.no-content', ['class' => 'info', 'text' => __('cpdt::m.No posts found.')])
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pagination-wrap mt-4 mb-4">
                                {!! $posts ? $posts->appends([ 's' => cp_get_search_query() ])->render() : '' !!}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SIDEBAR --}}
                <div class="col-sm-12 col-md-3 bg-white">
                    @include('inc.blog-sidebar')
                </div>
            </div>
        </div>
    </main>

@endsection
