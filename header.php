<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/style.css" />
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <?php wp_head(); ?>
</head>
<body data-theme="dark" class="notransition">
    <script>
        const body = document.body;
        const data = body.getAttribute("data-theme");

        const initTheme = (state) => {
            if (state === "dark") {
                body.setAttribute("data-theme", "dark");
            } else if (state === "light") {
                body.removeAttribute("data-theme");
            } else {
                localStorage.setItem("theme", data);
            }
        };

        initTheme(localStorage.getItem("theme"));

        setTimeout(() => body.classList.remove("notransition"), 75);
    </script>

    <div class="navbar" role="navigation">
        <nav class="menu">
            <input type="checkbox" id="menu-trigger" class="menu-trigger" />
            <label for="menu-trigger">
                <span class="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                        <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                    </svg>
                </span>
            </label>
            <a id="mode">
                <svg class="mode-sunny" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                    <title>LIGHT</title>
                    <line x1="256" y1="48" x2="256" y2="96"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="256" y1="416" x2="256" y2="464"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="403.08" y1="108.92" x2="369.14" y2="142.86"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="142.86" y1="369.14" x2="108.92" y2="403.08"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="464" y1="256" x2="416" y2="256"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="96" y1="256" x2="48" y2="256"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="403.08" y1="403.08" x2="369.14" y2="369.14"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="142.86" y1="142.86" x2="108.92" y2="108.92"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <circle cx="256" cy="256" r="80"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                </svg>
                <svg class="mode-moon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                    <title>DARK</title>
                    <line x1="256" y1="48" x2="256" y2="96"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="256" y1="416" x2="256" y2="464"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="403.08" y1="108.92" x2="369.14" y2="142.86"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="142.86" y1="369.14" x2="108.92" y2="403.08"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="464" y1="256" x2="416" y2="256"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="96" y1="256" x2="48" y2="256"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="403.08" y1="403.08" x2="369.14" y2="369.14"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="142.86" y1="142.86" x2="108.92" y2="108.92"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <circle cx="256" cy="256" r="80"
                        style="stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                </svg>
            </a>
            <div class="trigger">
                <div class="trigger-container">
                    <?php get_template_part('template-parts/menu', 'main'); ?>
                    <a class="menu-link rss" href="<?php bloginfo('url') ?>/feed">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 512 512"
                            fill="#ED812E">
                            <title>RSS</title>
                            <path d="M108.56,342.78a60.34,60.34,0,1,0,60.56,60.44A60.63,60.63,0,0,0,108.56,342.78Z" />
                            <path
                                d="M48,186.67v86.55c52,0,101.94,15.39,138.67,52.11s52,86.56,52,138.67h86.66C325.33,312.44,199.67,186.67,48,186.67Z" />
                            <path
                                d="M48,48v86.56c185.25,0,329.22,144.08,329.22,329.44H464C464,234.66,277.67,48,48,48Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </div>