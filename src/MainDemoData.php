<?php

namespace App\Themes\ContentPressDefaultTheme;

class MainDemoData
{

    public static function getPosts()
    {
        return [
            //#! Category: General
            [
                'title' => "Elon Musk 'guesses' SpaceX could send a ship to Mars as soon as 2024",
                'content' => self::loremIpsumText(),
                'featured_image' => 'unsplash-25.jpg',
                'images' => false,
                'category' => 'General',
                'tags' => [ 'News', 'Elon Musk', 'SpaceX' ],
                'comments' => false,
            ],
            [
                'title' => "The best DIY home security systems of 2020",
                'content' => self::loremIpsumText(),
                'featured_image' => 'unsplash-24.jpg',
                'images' => false,
                'category' => 'General',
                'tags' => [ 'News', 'DIY', 'Security', 'Home' ],
                'comments' => false,
            ],
            [
                'title' => "United States sees its coronavirus cases move past the 8 million mark",
                'content' => self::loremIpsumText(),
                'featured_image' => 'unsplash-23.jpg',
                'images' => false,
                'category' => 'General',
                'tags' => [ 'News', 'Corona Virus' ],
                'comments' => false,
            ],
            [
                'title' => "Morning News",
                'content' => "<p>No, no, not the girl, I'm pretty sure she's already taken, I mean the morning news that you get when you wake up and discover that it's a beautiful day and it's only getting better.</p>" . self::loremIpsumText(),
                'featured_image' => 'unsplash-7.jpg',
                'images' => false,
                'category' => 'General',
                'tags' => [ 'Morning', 'News' ],
                'comments' => false,
            ],

            //#! Category: Core
            [
                'title' => "Commands",
                'content' => '<p>Since Laravel is not WordPress, sometimes you might need to run various commands and if your website is on a shared server without access to a <strong>SSH</strong> console then things get ugly. For that you now have a beautiful <strong>Commands</strong> section under your <strong>Administration Dashboard</strong> that helps you execute the most common commands. Yay!&nbsp;</p><p><img style="border-style: none; margin: 20px; float: left;" src="IMG_PLACEHOLDER_1" alt="" width="400" height="211" /> As the Lorem Ipsum says, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'featured_image' => 'unsplash-14.jpg',
                'images' => [
                    'IMG_PLACEHOLDER_1' => '__commands.png',
                ],
                'category' => 'Core',
                'tags' => [ 'Commands', 'Dashboard', 'Admin', 'Core' ],
                'comments' => false,
            ],
            [
                'title' => "Themes & Plugins",
                'content' => "<p>Say yes, 'cause they're here! We also have a Marketplace that will provide you with themes and plugins to fit your needs! No longer reinvent the wheel every time you have a new project!</p>" . self::loremIpsumText(),
                'featured_image' => 'unsplash-12.jpg',
                'images' => false,
                'category' => 'Core',
                'tags' => [ 'Core', 'Themes', 'Plugins', ],
                'comments' => false,
            ],
            [
                'title' => "Custom Actions And Filters",
                'content' => "<p>We've got that too! You can super charge your themes and plugins with actions and filters just like you would do it in any WordPress websites.</p>" . self::loremIpsumText(),
                'featured_image' => 'unsplash-11.jpg',
                'images' => false,
                'category' => 'Core',
                'tags' => [ 'Core', 'Actions', 'Filters' ],
                'comments' => false,
            ],
            [
                'title' => "Custom Post Types? Yes!",
                'content' => "<p>We've got you covered if you want Custom Post Types. No coding necessary, everything is visual and intuitive.</p>" . '<p><img style="border-style: none; margin: 20px; float: left;" src="IMG_PLACEHOLDER_1" alt="" width="400" height="211" /> As the Lorem Ipsum says, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'featured_image' => 'unsplash-10.jpg',
                'images' => [
                    'IMG_PLACEHOLDER_1' => '__post-types.png',
                ],
                'category' => 'Core',
                'tags' => [ 'Core', 'Posts', 'Custom Post Types', ],
                'comments' => false,
            ],
            [
                'title' => "Creating Posts? Easy!",
                'content' => "<p>Pretty simple, click a button, write some text and you're ready to go!</p>" . '<p><img style="border-style: none; margin: 20px; float: left;" src="IMG_PLACEHOLDER_1" alt="" width="400" height="211" /> As the Lorem Ipsum says, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'featured_image' => 'unsplash-9.jpg',
                'images' => [
                    'IMG_PLACEHOLDER_1' => '__posts.png',
                ],
                'category' => 'Core',
                'tags' => [ 'Core', 'Posts', 'Editing' ],
                'comments' => false,
            ],

            //#! Category: Science
            [
                'title' => "Turning space images into music makes astronomy more accessible",
                'content' => self::loremIpsumText(),
                'featured_image' => 'unsplash-18.jpg',
                'images' => false,
                'category' => 'Science',
                'tags' => [ 'Science', 'Space', 'Music', 'Astronomy' ],
                'comments' => false,
            ],
            [
                'title' => "The first black hole image helped test general relativity in a new way",
                'content' => self::loremIpsumText(),
                'featured_image' => 'unsplash-17.jpg',
                'images' => false,
                'category' => 'Science',
                'tags' => [ 'Science', 'Black holes', 'Space', ],
                'comments' => false,
            ],
            [
                'title' => "The Milky Way’s most massive star cluster may have eaten a smaller cluster",
                'content' => self::loremIpsumText(),
                'featured_image' => 'unsplash-16.jpg',
                'images' => false,
                'category' => 'Science',
                'tags' => [ 'Science', 'Milky Way', 'Stars', ],
                'comments' => false,
            ],
            [
                'title' => "What will happen when COVID-19 and the flu collide this fall?",
                'content' => self::loremIpsumText(),
                'featured_image' => 'unsplash-15.jpg',
                'images' => false,
                'category' => 'Science',
                'tags' => [ 'Science', 'Covid-19', 'Flu', 'Corona virus', ],
                'comments' => false,
            ],

            //#! Category: Web
            [
                'title' => "An iPhone a day keeps the doctor away",
                'content' => self::loremIpsumText(),
                'featured_image' => 'unsplash-22.jpg',
                'images' => false,
                'category' => 'Web',
                'tags' => [ 'Web', 'Apple', 'iPhone', '', ],
                'comments' => [
                    [
                        'content' => '<p>Hi, this is a comment.</p><p>To get started with moderating, editing, and deleting comments, please visit the Comments screen under each post type in the dashboard.</p>',
                        'replies' => [
                            'Hello! This is a reply',
                            'Hi! This is another reply, just to have a few comments.',
                        ],
                    ],
                ],
            ],
            [
                'title' => "Apple is working to make AR part of everyday life",
                'content' => self::loremIpsumText(),
                'featured_image' => 'unsplash-21.jpg',
                'images' => false,
                'category' => 'Web',
                'tags' => [ 'Web', 'Apple', 'Life', ],
                'comments' => [
                    [
                        'content' => '<p>Hi, this is a comment.</p><p>To get started with moderating, editing, and deleting comments, please visit the Comments screen under each post type in the dashboard.</p>',
                        'replies' => [
                            'Hello! This is a reply',
                            'Hi! This is another reply, just to have a few comments.',
                        ],
                    ],
                ],
            ],
            [
                'title' => "Microsoft ends support for Office 2010, bangs the Office 365 gong",
                'content' => self::loremIpsumText(),
                'featured_image' => 'unsplash-20.jpg',
                'images' => false,
                'category' => 'Web',
                'tags' => [ 'Web', 'Microsoft', 'Office 365', 'Office 2010', ],
                'comments' => [
                    [
                        'content' => '<p>Hi, this is a comment.</p><p>To get started with moderating, editing, and deleting comments, please visit the Comments screen under each post type in the dashboard.</p>',
                        'replies' => [
                            'Hello! This is a reply',
                            'Hi! This is another reply, just to have a few comments.',
                        ],
                    ],
                ],
            ],
            [
                'title' => "The evolution of Apple's iPhone",
                'content' => self::loremIpsumText(),
                'featured_image' => 'unsplash-19.jpg',
                'images' => false,
                'category' => 'Web',
                'tags' => [ 'Web', 'Phones', 'iPhone' ],
                'comments' => [
                    [
                        'content' => '<p>Hi, this is a comment.</p><p>To get started with moderating, editing, and deleting comments, please visit the Comments screen under each post type in the dashboard.</p>',
                        'replies' => [
                            'Hello! This is a reply',
                            'Hi! This is another reply, just to have a few comments.',
                        ],
                    ],
                ],
            ],
        ];
    }

    public static function getPages()
    {
        return [
            [
                'title' => 'Home',
                'content' => '',
            ],
            [
                'title' => "Blog",
                'content' => '',
            ],
            [
                'title' => "About",
                'content' => '<p>Hello! This is the about page. Here you can write something meaningful about you rather than the default lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
            ],
            [
                'title' => "Contact us",
                'content' => '<p>Hello! This is the contact page. Here you can write something meaningful about your company and maybe add a contact form rather than the default lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
            ],
        ];
    }

    public static function loremIpsumText()
    {
        $html = '<p>As the Lorem Ipsum says, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
        $html .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
        $html .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
        $html .= '<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></blockquote>';
        $html .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
        $html .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';

        return $html;
    }
}
