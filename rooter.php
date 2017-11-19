<?php

    $rooter = [
        "0"=> [
            "index"=> [
                "url"=> "/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^[/]?$|",
                "format"=> "/",
                "params"=> []
            ],
            "archive"=> [
                "url"=> "/blog/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/blog[/]?$|",
                "format"=> "/blog/",
                "params"=> []
            ],
            "do"=> [
                "url"=> "/action/[action=>alpha]",
                "widget"=> "Widget_Do",
                "action"=> "action",
                "regx"=> "|^/action/([_0-9a-zA-Z-]+)[/]?$|",
                "format"=> "/action/%s",
                "params"=> [
                    "action"
                ]
            ],
            "post"=> [
                "url"=> "/archives/[cid=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/archives/([0-9]+)[/]?$|",
                "format"=> "/archives/%s/",
                "params"=> [
                    "cid"
                ]
            ],
            "attachment"=> [
                "url"=> "/attachment/[cid=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/attachment/([0-9]+)[/]?$|",
                "format"=> "/attachment/%s/",
                "params"=> [
                    "cid"
                ]
            ],
            "category"=> [
                "url"=> "/category/[slug]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/category/([^/]+)[/]?$|",
                "format"=> "/category/%s/",
                "params"=> [
                    "slug"
                ]
            ],
            "tag"=> [
                "url"=> "/tag/[slug]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/tag/([^/]+)[/]?$|",
                "format"=> "/tag/%s/",
                "params"=> [
                    "slug"
                ]
            ],
            "author"=> [
                "url"=> "/author/[uid=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/author/([0-9]+)[/]?$|",
                "format"=> "/author/%s/",
                "params"=> [
                    "uid"
                ]
            ],
            "search"=> [
                "url"=> "/search/[keywords]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/search/([^/]+)[/]?$|",
                "format"=> "/search/%s/",
                "params"=> [
                    "keywords"
                ]
            ],
            "index_page"=> [
                "url"=> "/page/[page=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/page/([0-9]+)[/]?$|",
                "format"=> "/page/%s/",
                "params"=> [
                    "page"
                ]
            ],
            "archive_page"=> [
                "url"=> "/blog/page/[page=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/blog/page/([0-9]+)[/]?$|",
                "format"=> "/blog/page/%s/",
                "params"=> [
                    "page"
                ]
            ],
            "category_page"=> [
                "url"=> "/category/[slug]/[page=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/category/([^/]+)/([0-9]+)[/]?$|",
                "format"=> "/category/%s/%s/",
                "params"=> [
                    "slug",
                    "page"
                ]
            ],
            "tag_page"=> [
                "url"=> "/tag/[slug]/[page=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/tag/([^/]+)/([0-9]+)[/]?$|",
                "format"=> "/tag/%s/%s/",
                "params"=> [
                    "slug",
                    "page"
                ]
            ],
            "author_page"=> [
                "url"=> "/author/[uid=>digital]/[page=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/author/([0-9]+)/([0-9]+)[/]?$|",
                "format"=> "/author/%s/%s/",
                "params"=> [
                    "uid",
                    "page"
                ]
            ],
            "search_page"=> [
                "url"=> "/search/[keywords]/[page=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/search/([^/]+)/([0-9]+)[/]?$|",
                "format"=> "/search/%s/%s/",
                "params"=> [
                    "keywords",
                    "page"
                ]
            ],
            "archive_year"=> [
                "url"=> "/[year=>digital=>4]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/([0-9][4])[/]?$|",
                "format"=> "/%s/",
                "params"=> [
                    "year"
                ]
            ],
            "archive_month"=> [
                "url"=> "/[year=>digital=>4]/[month=>digital=>2]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/([0-9][4])/([0-9][2])[/]?$|",
                "format"=> "/%s/%s/",
                "params"=> [
                    "year",
                    "month"
                ]
            ],
            "archive_day"=> [
                "url"=> "/[year=>digital=>4]/[month=>digital=>2]/[day=>digital=>2]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/([0-9][4])/([0-9][2])/([0-9][2])[/]?$|",
                "format"=> "/%s/%s/%s/",
                "params"=> [
                    "year",
                    "month",
                    "day"
                ]
            ],
            "archive_year_page"=> [
                "url"=> "/[year=>digital=>4]/page/[page=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/([0-9][4])/page/([0-9]+)[/]?$|",
                "format"=> "/%s/page/%s/",
                "params"=> [
                    "year",
                    "page"
                ]
            ],
            "archive_month_page"=> [
                "url"=> "/[year=>digital=>4]/[month=>digital=>2]/page/[page=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/([0-9][4])/([0-9][2])/page/([0-9]+)[/]?$|",
                "format"=> "/%s/%s/page/%s/",
                "params"=> [
                    "year",
                    "month",
                    "page"
                ]
            ],
            "archive_day_page"=> [
                "url"=> "/[year=>digital=>4]/[month=>digital=>2]/[day=>digital=>2]/page/[page=>digital]/",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/([0-9][4])/([0-9][2])/([0-9][2])/page/([0-9]+)[/]?$|",
                "format"=> "/%s/%s/%s/page/%s/",
                "params"=> [
                    "year",
                    "month",
                    "day",
                    "page"
                ]
            ],
            "comment_page"=> [
                "url"=> "[permalink=>string]/comment-page-[commentPage=>digital]",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^(.+)/comment\\-page\\-([0-9]+)[/]?$|",
                "format"=> "%s/comment-page-%s",
                "params"=> [
                    "permalink",
                    "commentPage"
                ]
            ],
            "feed"=> [
                "url"=> "/feed[feed=>string=>0]",
                "widget"=> "Widget_Archive",
                "action"=> "feed",
                "regx"=> "|^/feed(.*)[/]?$|",
                "format"=> "/feed%s",
                "params"=> [
                    "feed"
                ]
            ],
            "feedback"=> [
                "url"=> "[permalink=>string]/[type=>alpha]",
                "widget"=> "Widget_Feedback",
                "action"=> "action",
                "regx"=> "|^(.+)/([_0-9a-zA-Z-]+)[/]?$|",
                "format"=> "%s/%s",
                "params"=> [
                    "permalink",
                    "type"
                ]
            ],
            "page"=> [
                "url"=> "/[slug].html",
                "widget"=> "Widget_Archive",
                "action"=> "render",
                "regx"=> "|^/([^/]+)\\.html[/]?$|",
                "format"=> "/%s.html",
                "params"=> [
                    "slug"
                ]
            ]
        ],
        "index"=> [
            "url"=> "/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "archive"=> [
            "url"=> "/blog/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "do"=> [
            "url"=> "/action/[action=>alpha]",
            "widget"=> "Widget_Do",
            "action"=> "action"
        ],
        "post"=> [
            "url"=> "/archives/[cid=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "attachment"=> [
            "url"=> "/attachment/[cid=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "category"=> [
            "url"=> "/category/[slug]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "tag"=> [
            "url"=> "/tag/[slug]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "author"=> [
            "url"=> "/author/[uid=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "search"=> [
            "url"=> "/search/[keywords]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "index_page"=> [
            "url"=> "/page/[page=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "archive_page"=> [
            "url"=> "/blog/page/[page=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "category_page"=> [
            "url"=> "/category/[slug]/[page=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "tag_page"=> [
            "url"=> "/tag/[slug]/[page=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "author_page"=> [
            "url"=> "/author/[uid=>digital]/[page=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "search_page"=> [
            "url"=> "/search/[keywords]/[page=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "archive_year"=> [
            "url"=> "/[year=>digital=>4]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "archive_month"=> [
            "url"=> "/[year=>digital=>4]/[month=>digital=>2]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "archive_day"=> [
            "url"=> "/[year=>digital=>4]/[month=>digital=>2]/[day=>digital=>2]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "archive_year_page"=> [
            "url"=> "/[year=>digital=>4]/page/[page=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "archive_month_page"=> [
            "url"=> "/[year=>digital=>4]/[month=>digital=>2]/page/[page=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "archive_day_page"=> [
            "url"=> "/[year=>digital=>4]/[month=>digital=>2]/[day=>digital=>2]/page/[page=>digital]/",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "comment_page"=> [
            "url"=> "[permalink=>string]/comment-page-[commentPage=>digital]",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ],
        "feed"=> [
            "url"=> "/feed[feed=>string=>0]",
            "widget"=> "Widget_Archive",
            "action"=> "feed"
        ],
        "feedback"=> [
            "url"=> "[permalink=>string]/[type=>alpha]",
            "widget"=> "Widget_Feedback",
            "action"=> "action"
        ],
        "page"=> [
            "url"=> "/[slug].html",
            "widget"=> "Widget_Archive",
            "action"=> "render"
        ]
    ];
return $rooter;