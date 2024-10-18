<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parametre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/dashboard/css/dash.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/dashboard/html/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/dashboard/css/parametre.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/dashboard/css/lists.css') }}">
</head>

<body>
    <!-- header -->
    @include('admin.include.menu')
    <!-- accueil -->

    <div class="containers principal">
        {{-- <div class="printableArea "> --}}
        <div class="titre">
            <h2>Paramètres</h2>
        </div>

        <div id="icone"class="stack">
            <div id="apparence"><span style="margin-right: 3px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30.075" height="21.885" viewBox="0 0 30.075 21.885"
                        id="svg">
                        <g id="Groupe_280" data-name="Groupe 280" transform="translate(0 0)">
                            <path id="Tracé_457" data-name="Tracé 457"
                                d="M36.842,149.885c3.492,0,5.875-.978,6.514-2.682a4.272,4.272,0,0,0-.128-3.66,1.177,1.177,0,0,1-.084-1.233c.212-.555.511-.81,1.577-.81.339,0,.683.044,1.106.044a12.422,12.422,0,0,0,1.277.044,3.812,3.812,0,0,0,4-2.726,5.641,5.641,0,0,0-.978-5.237C47.655,130.343,41.951,128,36.2,128c-8.218,0-14.9,4.726-14.9,10.517C21.3,146.348,30.368,149.885,36.842,149.885Zm-.639-19.33c4.81,0,9.879,2,11.795,4.642a3.073,3.073,0,0,1,.595,2.938c-.172.683-.467.938-1.533.938-.339,0-.683-.044-1.066-.044a12.409,12.409,0,0,0-1.277-.044,3.867,3.867,0,0,0-3.916,2.383,3.671,3.671,0,0,0,.128,3.237,1.814,1.814,0,0,1,.084,1.7c-.128.339-1.361,1.066-4.171,1.066-5.408-.044-12.988-2.77-12.988-8.857C23.854,134.131,29.391,130.554,36.2,130.554Z"
                                transform="translate(-21.3 -128)" fill="#4a41c5" />
                            <path id="Tracé_458" data-name="Tracé 458"
                                d="M325.3,350.1a3.407,3.407,0,1,0,3.409-3.4A3.415,3.415,0,0,0,325.3,350.1Zm3.409-.85a.85.85,0,1,1-.85.85A.853.853,0,0,1,328.709,349.255Z"
                                transform="translate(-313.166 -337.971)" fill="#4a41c5" />
                            <path id="Tracé_459" data-name="Tracé 459"
                                d="M168.033,448.489c-.255-1.321-1.149-1.489-1.533-1.489a.525.525,0,0,0-.255.044,1.8,1.8,0,0,0-1.489,1.533,1.479,1.479,0,0,0,.81,1.617,2.5,2.5,0,0,0,1.193.3,1.446,1.446,0,0,0,1.277-.683,1.816,1.816,0,0,0,0-1.321Z"
                                transform="translate(-159.005 -434.267)" fill="#4a41c5" />
                            <path id="Tracé_460" data-name="Tracé 460"
                                d="M111.281,348.653c.084-.044.128-.044.172-.084a1.428,1.428,0,0,0,1.193-1.321c.084-1.022-.85-1.4-1.277-1.577l-.044-.044a1.736,1.736,0,0,0-.639-.128,1.6,1.6,0,0,0-1.4.81,1.738,1.738,0,0,0-.044,1.7,1.4,1.4,0,0,0,1.277.81A2.483,2.483,0,0,0,111.281,348.653Z"
                                transform="translate(-105.533 -336.819)" fill="#4a41c5" />
                            <path id="Tracé_461" data-name="Tracé 461"
                                d="M179.377,257.774a2.3,2.3,0,0,0,1.96-1.828,1.561,1.561,0,0,0-1.193-1.449,1.864,1.864,0,0,0-2.044.81,1.729,1.729,0,0,0,0,1.7A1.436,1.436,0,0,0,179.377,257.774Z"
                                transform="translate(-171.626 -249.388)" fill="#4a41c5" />
                            <path id="Tracé_462" data-name="Tracé 462"
                                d="M291.689,221.861h.3a1.507,1.507,0,0,0,1.489-1.233,1.619,1.619,0,0,0-1.106-1.744,2.774,2.774,0,0,0-.595-.084,1.577,1.577,0,0,0-1.577,1.616,1.529,1.529,0,0,0,.383,1.022A1.4,1.4,0,0,0,291.689,221.861Z"
                                transform="translate(-279.467 -215.176)" fill="#4a41c5" />
                            <path id="Tracé_463" data-name="Tracé 463"
                                d="M406.309,221.721a.819.819,0,0,0,.3-.044,1.471,1.471,0,0,0,1.4-.978,1.435,1.435,0,0,0-.555-1.66,1.716,1.716,0,0,0-.978-.339,1.577,1.577,0,0,0-1.577,1.449,1.393,1.393,0,0,0,.339,1.15A1.7,1.7,0,0,0,406.309,221.721Z"
                                transform="translate(-389.577 -215.08)" fill="#4a41c5" />
                            <path id="Tracé_464" data-name="Tracé 464"
                                d="M517.316,250.521a1.382,1.382,0,0,0,.595.128,1.411,1.411,0,0,0,1.321-1.022,1.722,1.722,0,0,0-.766-1.916,1.761,1.761,0,0,0-.81-.212,1.529,1.529,0,0,0-.339,3.021Z"
                                transform="translate(-496.369 -242.73)" fill="#4a41c5" />
                        </g>
                    </svg>
                </span>Apparence et accessibilté</div>
            <div id="profil"><span class="user"><i class="fa-solid fa-user-group"></i></span>Profils</div>
            <div id="parametre01"><i class="fa-solid fa-gear"></i>Paramètres supplémentaires</div>
        </div>
        <div id="apparence_accessibilite">
            <div class="stack">
                <div class="gerer">
                    <h2>Apparence</h2>
                    <span>Gérer les paramètres de l'apparence de l'interface</span>
                </div>
                <div>

                </div>
            </div>

            <div class="trait"></div>

            <div class="stack">
                <div class="gerer">
                    <h2>Thèmes</h2>
                    <span>Gérer les paramètres de l'apparence de l'interface</span>
                </div>
                <div id="theme_application" class="stack">
                    <div id="theme_clair">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="350.5" height="317.424" viewBox="0 0 401.5 317.424" class="fa-sun1">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_205" data-name="Rectangle 205" width="400.064" height="316.896"
                                        fill="none" />
                                </clipPath>
                            </defs>
                            <g id="Thème_défaut" data-name="Thème défaut" transform="translate(0.722 0.528)">
                                <g id="Groupe_333" data-name="Groupe 333">
                                    <rect id="Rectangle_216" data-name="Rectangle 216" width="401" height="306"
                                        transform="translate(-0.472 -0.278)" fill="#fff" stroke="#4a41c5"
                                        stroke-width="0.5" />
                                    <g id="Groupe_330" data-name="Groupe 330" transform="translate(0.297 0)">
                                        <g id="Groupe_329" data-name="Groupe 329" clip-path="url(#clip-path)">
                                            <rect id="Rectangle_204" data-name="Rectangle 204" width="494.382"
                                                height="74.842" transform="translate(-43.724 -47.632)"
                                                fill="#4a41c5" />
                                        </g>
                                    </g>
                                    <g id="Groupe_332" data-name="Groupe 332" transform="translate(161.101 9)">
                                        <path id="Tracé_501" data-name="Tracé 501"
                                            d="M419.059,85.141a5.01,5.01,0,1,1-5.01-5.01,5.011,5.011,0,0,1,5.01,5.01"
                                            transform="translate(-195.92 -80.13)" fill="#9abdeb" />
                                        <path id="Tracé_502" data-name="Tracé 502"
                                            d="M417.167,90.151H219.258a5.01,5.01,0,1,1,0-10.021h197.91a5.01,5.01,0,0,1,0,10.021"
                                            transform="translate(-214.247 -80.13)" fill="#fff" />
                                        <rect id="Rectangle_206" data-name="Rectangle 206" width="189.596"
                                            height="9.077" transform="translate(29.584 39.483)" fill="#d9e0fb" />
                                        <rect id="Rectangle_207" data-name="Rectangle 207" width="189.596"
                                            height="9.077" transform="translate(29.584 57.132)" fill="#d9e0fb" />
                                        <rect id="Rectangle_208" data-name="Rectangle 208" width="189.596"
                                            height="9.077" transform="translate(29.584 74.781)" fill="#d9e0fb" />
                                        <rect id="Rectangle_209" data-name="Rectangle 209" width="136.532"
                                            height="9.077" transform="translate(29.584 107.056)" fill="#d9e0fb" />
                                        <rect id="Rectangle_210" data-name="Rectangle 210" width="189.596"
                                            height="9.077" transform="translate(29.584 139.828)" fill="#d9e0fb" />
                                        <rect id="Rectangle_211" data-name="Rectangle 211" width="77.15"
                                            height="9.077" transform="translate(29.584 124.196)" fill="#d9e0fb" />
                                        <rect id="Rectangle_212" data-name="Rectangle 212" width="71.176"
                                            height="5.213" transform="translate(29.584 236.133)" fill="#d9e0fb" />
                                        <rect id="Rectangle_213" data-name="Rectangle 213" width="71.176"
                                            height="5.213" transform="translate(29.584 246.235)" fill="#d9e0fb" />
                                        <rect id="Rectangle_214" data-name="Rectangle 214" width="71.176"
                                            height="5.213" transform="translate(29.584 256.337)" fill="#d9e0fb" />
                                        <rect id="Rectangle_215" data-name="Rectangle 215" width="37.026"
                                            height="5.213" transform="translate(29.584 266.44)" fill="#d9e0fb" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Thème clair</span>
                    </div>
                    <div id="theme_defaut">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="550.211" height="317.041" viewBox="0 0 683.211 317.041" class="fa-sun1">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_205" data-name="Rectangle 205" width="400.064"
                                        height="316.896" fill="none" />
                                </clipPath>
                            </defs>
                            <g id="Thème_système" data-name="Thème système" transform="translate(0.25 0.145)"class="fa-sun1">
                                <g id="Groupe_337" data-name="Groupe 337">
                                    <g id="Groupe_333" data-name="Groupe 333" transform="translate(0)">
                                        <rect id="Rectangle_216" data-name="Rectangle 216" width="400.436"
                                            height="305.25" transform="translate(0 0.105)" fill="#fff"
                                            stroke="#4a41c5" stroke-width="0.5" />
                                        <g id="Groupe_330" data-name="Groupe 330" transform="translate(0.297 0)">
                                            <g id="Groupe_329" data-name="Groupe 329" clip-path="url(#clip-path)">
                                                <rect id="Rectangle_204" data-name="Rectangle 204" width="494.382"
                                                    height="74.842" transform="translate(-43.724 -47.632)"
                                                    fill="#4a41c5" />
                                            </g>
                                        </g>
                                        <g id="Groupe_332" data-name="Groupe 332" transform="translate(161.101 9)">
                                            <path id="Tracé_501" data-name="Tracé 501"
                                                d="M419.059,85.141a5.01,5.01,0,1,1-5.01-5.01,5.011,5.011,0,0,1,5.01,5.01"
                                                transform="translate(-195.92 -80.13)" fill="#9abdeb" />
                                            <path id="Tracé_502" data-name="Tracé 502"
                                                d="M417.167,90.151H219.258a5.01,5.01,0,1,1,0-10.021h197.91a5.01,5.01,0,0,1,0,10.021"
                                                transform="translate(-214.247 -80.13)" fill="#fff" />
                                            <rect id="Rectangle_206" data-name="Rectangle 206" width="189.596"
                                                height="9.077" transform="translate(29.584 39.483)" fill="#d9e0fb" />
                                            <rect id="Rectangle_207" data-name="Rectangle 207" width="189.596"
                                                height="9.077" transform="translate(29.584 57.132)" fill="#d9e0fb" />
                                            <rect id="Rectangle_208" data-name="Rectangle 208" width="189.596"
                                                height="9.077" transform="translate(29.584 74.781)" fill="#d9e0fb" />
                                            <rect id="Rectangle_209" data-name="Rectangle 209" width="136.532"
                                                height="9.077" transform="translate(29.584 107.056)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_210" data-name="Rectangle 210" width="189.596"
                                                height="9.077" transform="translate(29.584 139.828)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_211" data-name="Rectangle 211" width="77.15"
                                                height="9.077" transform="translate(29.584 124.196)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_212" data-name="Rectangle 212" width="71.176"
                                                height="5.213" transform="translate(29.584 236.133)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_213" data-name="Rectangle 213" width="71.176"
                                                height="5.213" transform="translate(29.584 246.235)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_214" data-name="Rectangle 214" width="71.176"
                                                height="5.213" transform="translate(29.584 256.337)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_215" data-name="Rectangle 215" width="37.026"
                                                height="5.213" transform="translate(29.584 266.44)" fill="#d9e0fb" />
                                        </g>
                                    </g>
                                </g>
                                <g id="Groupe_336" data-name="Groupe 336" transform="translate(282.275)"class="fa-sun1">
                                    <g id="Groupe_333-2" data-name="Groupe 333" transform="translate(0)">
                                        <rect id="Rectangle_216-2" data-name="Rectangle 216" width="400.436"
                                            height="305.25" transform="translate(0 0.105)" fill="#050043"
                                            stroke="#4a41c5" stroke-width="0.5" />
                                        <g id="Groupe_330-2" data-name="Groupe 330" transform="translate(0.297 0)">
                                            <g id="Groupe_329-2" data-name="Groupe 329" clip-path="url(#clip-path)">
                                                <path id="Tracé_503" data-name="Tracé 503" d="M0,0H494.382V74.842H0Z"
                                                    transform="translate(-43.724 -47.632)" fill="#4a41c5" />
                                            </g>
                                        </g>
                                        <g id="Groupe_332-2" data-name="Groupe 332" transform="translate(161.101 9)">
                                            <path id="Tracé_501-2" data-name="Tracé 501"
                                                d="M419.059,85.141a5.01,5.01,0,1,1-5.01-5.01,5.011,5.011,0,0,1,5.01,5.01"
                                                transform="translate(-195.92 -80.13)" fill="#9abdeb" />
                                            <path id="Tracé_502-2" data-name="Tracé 502"
                                                d="M417.167,90.151H219.258a5.01,5.01,0,1,1,0-10.021h197.91a5.01,5.01,0,0,1,0,10.021"
                                                transform="translate(-214.247 -80.13)" fill="#fff" />
                                            <rect id="Rectangle_206-2" data-name="Rectangle 206" width="189.596"
                                                height="9.077" transform="translate(29.584 39.483)" fill="#d9e0fb" />
                                            <rect id="Rectangle_207-2" data-name="Rectangle 207" width="189.596"
                                                height="9.077" transform="translate(29.584 57.132)" fill="#d9e0fb" />
                                            <rect id="Rectangle_208-2" data-name="Rectangle 208" width="189.596"
                                                height="9.077" transform="translate(29.584 74.781)" fill="#d9e0fb" />
                                            <rect id="Rectangle_209-2" data-name="Rectangle 209" width="136.532"
                                                height="9.077" transform="translate(29.584 107.056)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_210-2" data-name="Rectangle 210" width="189.596"
                                                height="9.077" transform="translate(29.584 139.828)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_211-2" data-name="Rectangle 211" width="77.15"
                                                height="9.077" transform="translate(29.584 124.196)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_212-2" data-name="Rectangle 212" width="71.176"
                                                height="5.213" transform="translate(29.584 236.133)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_213-2" data-name="Rectangle 213" width="71.176"
                                                height="5.213" transform="translate(29.584 246.235)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_214-2" data-name="Rectangle 214" width="71.176"
                                                height="5.213" transform="translate(29.584 256.337)"
                                                fill="#d9e0fb" />
                                            <rect id="Rectangle_215-2" data-name="Rectangle 215" width="37.026"
                                                height="5.213" transform="translate(29.584 266.44)" fill="#d9e0fb" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Thème par défaut du système</span>
                    </div>
                    <div id="theme_sombre">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="350.936" height="317.041" viewBox="0 0 400.936 317.041" class="fa-moon1">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_205" data-name="Rectangle 205" width="400.064"
                                        height="316.896" fill="none" />
                                </clipPath>
                            </defs>
                            <g id="Thème_dark" data-name="Thème dark" transform="translate(0.25 0.145)">
                                <g id="Groupe_333" data-name="Groupe 333" transform="translate(0)">
                                    <rect id="Rectangle_216" data-name="Rectangle 216" width="400.436"
                                        height="305.25" transform="translate(0 0.105)" fill="#050043"
                                        stroke="#4a41c5" stroke-width="0.5" />
                                    <g id="Groupe_330" data-name="Groupe 330" transform="translate(0.297 0)">
                                        <g id="Groupe_329" data-name="Groupe 329" clip-path="url(#clip-path)">
                                            <path id="Tracé_503" data-name="Tracé 503" d="M0,0H494.382V74.842H0Z"
                                                transform="translate(-43.724 -47.632)" fill="#4a41c5" />
                                        </g>
                                    </g>
                                    <g id="Groupe_332" data-name="Groupe 332" transform="translate(161.101 9)">
                                        <path id="Tracé_501" data-name="Tracé 501"
                                            d="M419.059,85.141a5.01,5.01,0,1,1-5.01-5.01,5.011,5.011,0,0,1,5.01,5.01"
                                            transform="translate(-195.92 -80.13)" fill="#9abdeb" />
                                        <path id="Tracé_502" data-name="Tracé 502"
                                            d="M417.167,90.151H219.258a5.01,5.01,0,1,1,0-10.021h197.91a5.01,5.01,0,0,1,0,10.021"
                                            transform="translate(-214.247 -80.13)" fill="#fff" />
                                        <rect id="Rectangle_206" data-name="Rectangle 206" width="189.596"
                                            height="9.077" transform="translate(29.584 39.483)" fill="#d9e0fb" />
                                        <rect id="Rectangle_207" data-name="Rectangle 207" width="189.596"
                                            height="9.077" transform="translate(29.584 57.132)" fill="#d9e0fb" />
                                        <rect id="Rectangle_208" data-name="Rectangle 208" width="189.596"
                                            height="9.077" transform="translate(29.584 74.781)" fill="#d9e0fb" />
                                        <rect id="Rectangle_209" data-name="Rectangle 209" width="136.532"
                                            height="9.077" transform="translate(29.584 107.056)" fill="#d9e0fb" />
                                        <rect id="Rectangle_210" data-name="Rectangle 210" width="189.596"
                                            height="9.077" transform="translate(29.584 139.828)" fill="#d9e0fb" />
                                        <rect id="Rectangle_211" data-name="Rectangle 211" width="77.15"
                                            height="9.077" transform="translate(29.584 124.196)" fill="#d9e0fb" />
                                        <rect id="Rectangle_212" data-name="Rectangle 212" width="71.176"
                                            height="5.213" transform="translate(29.584 236.133)" fill="#d9e0fb" />
                                        <rect id="Rectangle_213" data-name="Rectangle 213" width="71.176"
                                            height="5.213" transform="translate(29.584 246.235)" fill="#d9e0fb" />
                                        <rect id="Rectangle_214" data-name="Rectangle 214" width="71.176"
                                            height="5.213" transform="translate(29.584 256.337)" fill="#d9e0fb" />
                                        <rect id="Rectangle_215" data-name="Rectangle 215" width="37.026"
                                            height="5.213" transform="translate(29.584 266.44)" fill="#d9e0fb" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Thème sombre</span>
                    </div>
                </div>
                <div></div>
            </div>

            <div class="trait"></div>

            <div class="stackt">
                <div>
                    <h2>Arrière plan</h2>
                </div>
                <div>

                </div>
            </div>

            <div class="trait"></div>


            <div class="stackt">
                <div>
                    <h2>Raccourcis clavier</h2>
                </div>
                <div>

                </div>
            </div>
        </div>

        <div id="profils" class="">
            <div id="ensemble_profil" class="stack">
                <div id="ensemble_profil1">
                    <span id="creer_profils">Créer un profil</span>
                    <span id="ensemble_profil12" class="traits"></span>
                </div>
                <div id="ensemble_profil2">
                    <span id="vue_profils">Vue des profils</span>
                    <span id="ensemble_profil22" class="traits"></span>
                </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data" id="sauvegarde_form">
                <div class="stack" id="creer_profil">
                    <div></div>
                    <div class="champ1 stack">
                        <div class="champs">
                            <label for="">Nom du profil</label>
                            <input type="text" name="" placeholder="Entrez un nom du profil"
                                id="input_text">
                            <div id="error1"></div>
                        </div>
                        <div class="champs">
                            <label for="">Description</label>
                            <textarea name="" id="input_textarea" placeholder="Entrez une description"></textarea>
                            <div id="error2"></div>
                        </div>
                    </div>
                    <div class="">
                        <div>Permissions</div>
                        <div class="trait" id="traitement"></div>
                        <div class="stack">
                            <div id="option1" class="stacks">
                                <div id="option1_enseignant">
                                    <div class="stacks">
                                        <label for="" class="fw-bolder">Gestion des enseignants</label>
                                        <div class="checkbox-containers" id="checkbox-containers1">
                                            <i class="fa-solid fa-toggle-on green-color" id="green_color1"></i>
                                            <i class="fa-solid fa-toggle-on red-color" id="red_color1"></i>
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Ajouter un enseignant</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Editer un enseignant</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Supprimer un enseignant</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Imprimer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Exporter</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Importer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                </div>
                                <div id="option1_etudiant">
                                    <div class="stacks">
                                        <label for="" class="fw-bolder">Gestion des étudiants</label>
                                        <div class="checkbox-containers" id="checkbox-containers2">
                                            <i class="fa-solid fa-toggle-on green-color" id="green_color2"></i>
                                            <i class="fa-solid fa-toggle-on red-color" id="red_color2"></i>
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Ajouter un étudiant</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Editer un étudiant</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Supprimer un étudiant</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Imprimer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Exporter</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Importer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                </div>
                                <div id="option1_matiere">
                                    <div class="stacks">
                                        <label for="" class="fw-bolder">Gestion des matieres</label>
                                        <div class="checkbox-containers" id="checkbox-containers3">
                                            <i class="fa-solid fa-toggle-on green-color" id="green_color3"></i>
                                            <i class="fa-solid fa-toggle-on red-color" id="red_color3"></i>
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Ajouter une matiere</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Editer une matiere</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Supprimer une matiere</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Imprimer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Exporter</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Importer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="option2" class="stacks">
                                <div id="option2_filiere">
                                    <div class="stacks">
                                        <label for="" class="fw-bolder">Gestion des filières</label>
                                        <div class="checkbox-containers" id="checkbox-containers4">
                                            <i class="fa-solid fa-toggle-on green-color" id="green_color4"></i>
                                            <i class="fa-solid fa-toggle-on red-color" id="red_color4"></i>
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Ajouter un filière</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Editer un filière</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Supprimer un filière</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Imprimer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Exporter</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Importer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                </div>
                                <div id="option2_classe">
                                    <div class="stacks">
                                        <label for="" class="fw-bolder">Gestion des classes</label>
                                        <div class="checkbox-containers" id="checkbox-containers5">
                                            <i class="fa-solid fa-toggle-on green-color" id="green_color5"></i>
                                            <i class="fa-solid fa-toggle-on red-color" id="red_color5"></i>
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Ajouter un classe</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Editer un classe</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Supprimer un classe</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Imprimer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Exporter</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Importer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                </div>
                                <div id="option2_c">
                                    <div class="stacks">
                                        <label for="" class="fw-bolder">Gestion du calendrier</label>
                                        <div class="checkbox-containers" id="checkbox-containers6">
                                            <i class="fa-solid fa-toggle-on green-color" id="green_color6"></i>
                                            <i class="fa-solid fa-toggle-on red-color" id="red_color6"></i>
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Créer un calendrier</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Editer un calendrier</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Supprimer un calendrier</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="option3" class="stacks">
                                <div id="option3_c">
                                    <div class="stacks">
                                        <label for="" class="fw-bolder">Gestion de correction</label>
                                        <div class="checkbox-containers" id="checkbox-containers7">
                                            <i class="fa-solid fa-toggle-on green-color" id="green_color7"></i>
                                            <i class="fa-solid fa-toggle-on red-color" id="red_color7"></i>
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Créer un dossier</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Exporter</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Imprimer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Terminer et archiver</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                </div>
                                <div id="option3_sujet">
                                    <div class="stacks">
                                        <label for="" class="fw-bolder">Gestion des sujets</label>
                                        <div class="checkbox-containers" id="checkbox-containers">
                                            <i class="fa-solid fa-toggle-on green-color" id="green_color8"></i>
                                            <i class="fa-solid fa-toggle-on red-color" id="red_color8"></i>
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Créer un sujet</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Imprimer un sujet</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Corriger un sujet</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Archiver un sujet</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Voir le corrigé d'un sujet</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Voir la note des étudiants</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Exporter</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <div class="stacks">
                                        <label for="">Importer</label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                </div>
                                <div id="option3_">

                                </div>
                            </div>
                        </div>
                        <div></div>
                        <input id="sauvegarde" type="submit" value="Sauvegarder" name="sauvegarder" />
                    </div>
                </div>
            </form>

            <div id="vue_profil" class="stacks">
                <table>
                    <thead>
                        <tr>
                            <th scope="col" id="data1">Id</th>
                            <th scope="col" class="data2">Nom</th>
                            <th scope="col" id="data3">Utilisateurs</th>
                            <th scope="col" id="data4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Id">0001</td>
                            <td data-label="Nom" class="data2">ADMINISTRATEUR</td>
                            <td data-label="Utilisateur">01</td>
                            <td data-label="Action"><span class="solid_distance"><i
                                        class="fa-solid fa-pen"></i></span><span class="solid_distances"><i
                                        class="fa-solid fa-trash-can"></i></span></td>
                        </tr>
                        <tr>
                            <td data-label="Id">0002</td>
                            <td data-label="Nom" class="data2">PROFESSEUR</td>
                            <td data-label="Utilisateur">50</td>
                            <td data-label="Action"><span class="solid_distance"><i
                                        class="fa-solid fa-pen"></i></span><span class="solid_distances"><i
                                        class="fa-solid fa-trash-can"></i></span></td>
                        </tr>
                        <tr>
                            <td data-label="Id">0003</td>
                            <td data-label="Nom" class="data2">SURVEILLANT</td>
                            <td data-label="Utilisateur">10</td>
                            <td data-label="Action"><span class="solid_distance"><i
                                        class="fa-solid fa-pen"></i></span><span class="solid_distances"><i
                                        class="fa-solid fa-trash-can"></i></span></td>
                        </tr>
                        <tr>
                            <td data-label="Id">0004</td>
                            <td data-label="Nom" class="data2">CORRECTEUR</td>
                            <td data-label="Utilisateur">8</td>
                            <td data-label="Action"><span class="solid_distance"><i
                                        class="fa-solid fa-pen"></i></span><span class="solid_distances"><i
                                        class="fa-solid fa-trash-can"></i></span></td>
                        </tr>
                    </tbody>
                </table>
                <!-- Modal Structure -->
                <div id="myModal" class="modal">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content text-center">
                    <button type="button" class="custom-close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i></button>
                        <div  class="modal-body text-center d-flex flex-column" id="">
                            <i class="fa-solid fa-triangle-exclamation" id="fa-triangle-exclamation"></i>                            
                            <span>Êtes vous sûres?</span>
                        </div>
                        <p>Voulez-vous supprimer le profil <span id="nom_affiche"></span> ?</p>
                        <div id="button" class="d-flex justify-content-around">
                            <button type="submit" class="btn btn-success">Oui, je confirme</button>
                            <button type="cancel"  class="btn btn-secondaire">Annuler</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div id="parametre_supplementaire01" class="stacks">
            <!-- <div>
                    <h3>Paramètres supplémentaires</h3>
                </div>
                <div class="trait"></div> -->

            <form action="" method="">
                <div class="affichage">
                    <div class="containers0">
                        <div class="circle">
                            <input type="file" id="file-input" accept="image/*">
                            <div id="image-overlay">
                                <img id="preview" src="" alt="Image Preview" />
                            </div>
                        </div>
                        <div class="buttons">
                            <span id="download-button"><i class="fa-solid fa-upload"></i></span>
                            <button id="delete-button"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>
                    <div class="champ stack">
                        <div class="champs">
                            <label for="">Nom de l'établissement</label>
                            <input type="text" name="" placeholder="Entrez un nom du profil"
                                id="input_text">
                            <div id="error1"></div>
                        </div>
                        <div class="champs">
                            <label for="">Contact</label>
                            <input type="tel" name="" placeholder="Entrez votre contact" id="input_text">
                            <div id="error1"></div>
                        </div>
                        <div class="champs">
                            <label for="">Email</label>
                            <input type="email" name="" placeholder="Entrez votre email" id="input_text">
                            <div id="error1"></div>
                        </div>
                        <div class="champs">
                            <label for="">Adresse</label>
                            <input type="text" name="" placeholder="Entrez email" id="input_text">
                            <div id="error1"></div>
                        </div>
                        <div class="champs">
                            <label for="">Description</label>
                            <textarea name="" id="input_textarea" placeholder="Entrez une description"></textarea>
                            <div id="error2"></div>
                        </div>
                        <div>
                            <input type="submit" value="Sauvegarder" name="sauvegarder" id="sauvegarder">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        {{-- </div> --}}
        
    </div>
    <!-- Footer -->

    @include('admin.include.footer')
    <!-- Assurez-vous d'inclure jQuery en premier -->
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
    var apparence = document.getElementById('apparence');
    var profil = document.getElementById('profil');
    var parametre = document.getElementById('parametre01');
    var apparences = document.getElementById('apparence_accessibilite');
    var profils = document.getElementById('profils');
    var parametres = document.getElementById('parametre_supplementaire01');

    var creerprofils = document.getElementById('creer_profils');
    var vueprofils = document.getElementById('vue_profils');
    var creerprofil = document.getElementById('creer_profil');
    var vueprofil = document.getElementById('vue_profil');
    
    const underline = document.getElementById('ensemble_profil12');
    const underlines = document.getElementById('ensemble_profil22');


    apparence.addEventListener('click', function() {
        console.log("125252255");
        apparences.style.display = 'flex'; 
        apparences.style.flexDirection = 'column'; 
        apparence.style.background = '#e8eaed';
        apparence.style.borderRadius = '10px'; 
        profil.style.background = 'none'; 
        parametre.style.background = 'none'; 
        profils.style.display = 'none';    
        parametres.style.display = 'none';
    });

    parametre.addEventListener('click', function() {
        console.log("125252255");
        parametres.style.display = 'flex';
        parametres.style.flexDirection = 'column'; 
        parametre.style.background = '#e8eaed'; 
        parametre.style.borderRadius = '10px'; 
        profil.style.background = 'none'; 
        apparence.style.background = 'none'; 
        apparences.style.display = 'none';
        profils.style.display = 'none';
    });
    
    profil.addEventListener('click', function() {
        profils.style.display = 'flex'; 
        profils.style.flexDirection = 'column'; 
        profil.style.background = '#e8eaed';
        profil.style.borderRadius = '10px';  
        apparence.style.background = 'none';
        parametre.style.background = 'none';  
        apparences.style.display = 'none';
        parametres.style.display = 'none';
    });


    let activeProfile = null; // Variable pour suivre l'élément actif

vueprofils.addEventListener('mouseenter', function() {
    if (activeProfile !== 'vueprofils') {
        underlines.style.display = 'flex'; 
        vueprofils.style.cursor='pointer';
    }
});

vueprofils.addEventListener('mouseleave', function() {
    if (activeProfile !== 'vueprofils') {
        underlines.style.display = 'none'; 
    }
});

creerprofils.addEventListener('mouseenter', function() {
    if (activeProfile !== 'creerprofils') {
        underline.style.display = 'flex'; 
        creerprofils.style.cursor='pointer';
    }
});

creerprofils.addEventListener('mouseleave', function() {
    if (activeProfile !== 'creerprofils') {
        underline.style.display = 'none'; 
    }
});

creerprofils.addEventListener('click', function() {
    creerprofil.style.display = 'flex';
    creerprofil.style.flexDirection = 'column'; 
    vueprofil.style.display = 'none';
    underline.style.display = 'flex'; 
    underlines.style.display = 'none'; 
    activeProfile = 'creerprofils'; 
});

vueprofils.addEventListener('click', function() {
    vueprofil.style.display = 'grid';
    vueprofil.style.flexDirection = 'column'; 
    creerprofil.style.display = 'none';
    underlines.style.display = 'flex'; 
    underline.style.display = 'none'; 
    activeProfile = 'vueprofils'; 
});

// Verification des informations des differents input lors de la soumission du formulaire 

        var input_text = document.getElementById('input_text');
        var input_textarea = document.getElementById('input_textarea');
        var sauvegarde = document.getElementById('sauvegarde_form');
        var error_message1 = document.getElementById('error1');
        var error_message2 = document.getElementById('error2');

        sauvegarde.addEventListener('submit', function(event) {
            
            // Vérification des champs
            if (input_text.value.trim() === '') {
                error_message1.textContent = 'Le champ est obligatoire.';
                error_message1.style.color='red';
                event.preventDefault(); 
            }else{
                error_message1.textContent = '';
            }

            if (input_textarea.value.trim() === '') {
                error_message2.textContent = 'Le champ est obligatoire.';
                error_message2.style.color='red';
                event.preventDefault(); 
            }else{
                error_message2.textContent = '';
            }

        });

        input_text.addEventListener('blur', function(){
            input_text.style.borderColor='##4A41C5';
        });
        input_textarea.addEventListener('blur', function(){
            input_textarea.style.borderColor='##4A41C5';
        });
        var modal = document.getElementById("myModal");

        var closeBtn = document.getElementsByClassName("close")[0];
        var cancelBtn = document.getElementsByClassName("cancel")[0];

        var solidDistanceElements = document.querySelectorAll(".solid_distances");

        solidDistanceElements.forEach(function(element) {
        element.addEventListener("click", function() {
            modal.style.display = "block";  
        });
        });

        closeBtn.onclick = function() {
        modal.style.display = "none";
        }
        cancelBtn.onclick = function() {
        modal.style.display = "none";
        }

        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }

        var modification_Btns = document.getElementsByClassName("fa-pen");
        Array.prototype.forEach.call(modification_Btns, function(element) {
            element.addEventListener("click", function() {
                creerprofils.click();
                solidDistancesElements.forEach(function(element) {
                    element.addEventListener('click', function() {
                        const nomCells = this.closest('tr').querySelector('td[data-label="Nom"]');
                        const nomTexts = nomCells.textContent.trim();

                        const nomAfficheElements = document.getElementById('input_text');
                        nomAfficheElements.value = nomTexts;
                    });
                });
            });
        });



        var solidDistance = document.querySelectorAll(".solid_distance");
        var solidDistanceBtn = document.querySelectorAll(".solid_distances");

        solidDistanceBtn.addEventListener('mouseenter', function() {
            solidDistanceBtn.style.cursor='pointer';  
        });
        solidDistance.addEventListener('mouseenter', function() {
            solidDistance.style.cursor='pointer';  
        });

       
</script>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const solidDistancesElements = document.querySelectorAll('.solid_distances');

            solidDistancesElements.forEach(function(element) {
                element.addEventListener('click', function() {
                    const nomCell = this.closest('tr').querySelector('td[data-label="Nom"]');
                    
                    const nomText = nomCell.textContent.trim();

                    const nomAfficheElement = document.querySelector('#nom_affiche');
                    nomAfficheElement.textContent = nomText;
                    nomAfficheElement.style.textTransform='capitalize';
                    nomAfficheElement.style.color='#293d7a';
                    nomAfficheElement.style.fontWeight='bold';
                });
            });
        });
</script>
<script>
            document.addEventListener('DOMContentLoaded', function() {
                var couleur_red = document.getElementById('red_color8');
                var couleur_green = document.getElementById('green_color8');
                var checkboxcontainer = document.getElementById('checkbox-containers');
                var checkboxes = document.querySelectorAll('#option3_sujet input[type="checkbox"]');

                function updateCouleurGreenDisplay() {
                    // Vérifie si toutes les cases sont cochées
                    const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
                    couleur_green.style.display = allChecked ? 'flex' : 'none';
                    couleur_red.style.display = allChecked ? 'none' : 'flex';
                }

                // Écoute l'événement de changement sur chaque case à cocher
                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener('change', updateCouleurGreenDisplay);
                });

                // Fonction pour gérer le clic sur couleur_green
                couleur_green.addEventListener('click', function() {
                    if (couleur_green.style.display === "flex") {
                        // Si couleur_green est visible, décocher tous les checkboxes
                        couleur_red.style.display = 'flex';
                        couleur_green.style.display = 'none';
                        checkboxes.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });
                    } else {
                        // Sinon, cocher tous les checkboxes
                        couleur_red.style.display = 'none';
                        couleur_green.style.display = 'flex';
                        checkboxes.forEach(function(checkbox) {
                            checkbox.checked = true;
                        });
                    }
                    updateCouleurGreenDisplay();
                });

                // Fonction pour gérer le clic sur couleur_red
                couleur_red.addEventListener('click', function() {
                    if (couleur_red.style.display === "flex") {
                        couleur_red.style.display = 'none';
                        couleur_green.style.display = 'flex';
                        checkboxes.forEach(function(checkbox) {
                            checkbox.checked = true;
                        });
                    } else {
                        couleur_red.style.display = 'flex';
                        couleur_green.style.display = 'none';
                        checkboxes.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });
                    }
                    updateCouleurGreenDisplay();
                });

                // Initialiser l'affichage de couleur_green
                updateCouleurGreenDisplay();





                var couleur_red7 = document.getElementById('red_color7');
                var couleur_green7 = document.getElementById('green_color7');
                var checkboxcontainer7 = document.getElementById('checkbox-containers7');
                var checkboxes7 = document.querySelectorAll('#option3_c input[type="checkbox"]');

                function updateCouleurGreenDisplay7() {
                    // Vérifie si toutes les cases sont cochées
                    const allChecked7 = Array.from(checkboxes7).every(checkbox => checkbox.checked);
                    couleur_green7.style.display = allChecked7 ? 'flex' : 'none';
                    couleur_red7.style.display = allChecked7 ? 'none' : 'flex';
                }

                // Écoute l'événement de changement sur chaque case à cocher
                checkboxes7.forEach(function(checkbox) {
                    checkbox.addEventListener('change', updateCouleurGreenDisplay7);
                });


                couleur_green7.addEventListener('click', function(e){
                    if(couleur_green7.style.display === "flex"){
                        couleur_red7.style.display='flex';
                        couleur_green7.style.display='none';
                            // Cocher tous les checkboxes
                            checkboxes7.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });

                    }else {
                        couleur_red7.style.display='none';
                        couleur_green7.style.display='flex';
                        // Cocher tous les checkboxes
                        checkboxes7.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green7.style.display='flex';

                        });
                    }
                    updateCouleurGreenDisplay7();

                });
                couleur_red7.addEventListener('click', function(e){
                    if(couleur_red7.style.display === "flex"){
                        couleur_red7.style.display='none';
                        couleur_green7.style.display='flex';
                            // Cocher tous les checkboxes
                            checkboxes7.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green7.style.display='flex';

                        });

                    }else {
                        couleur_red7.style.display='flex';
                        couleur_green7.style.display='none';
                        // Cocher tous les checkboxes
                        checkboxes7.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });
                    }
                    updateCouleurGreenDisplay7();

                });
                updateCouleurGreenDisplay7();




                var couleur_red6 = document.getElementById('red_color6');
                var couleur_green6 = document.getElementById('green_color6');
                var checkboxcontainer6 = document.getElementById('checkbox-containers6');
                var checkboxes6 = document.querySelectorAll('#option2_c input[type="checkbox"]');

                function updateCouleurGreenDisplay6() {
                    // Vérifie si toutes les cases sont cochées
                    const allChecked6 = Array.from(checkboxes6).every(checkbox => checkbox.checked);
                    couleur_green6.style.display = allChecked6 ? 'flex' : 'none';
                    couleur_red6.style.display = allChecked6 ? 'none' : 'flex';
                }

                // Écoute l'événement de changement sur chaque case à cocher
                checkboxes6.forEach(function(checkbox) {
                    checkbox.addEventListener('change', updateCouleurGreenDisplay6);
                });


                couleur_green6.addEventListener('click', function(e){
                    if(couleur_green6.style.display === "flex"){
                        couleur_red6.style.display='flex';
                        couleur_green6.style.display='none';
                            // Cocher tous les checkboxes
                            checkboxes6.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });

                    }else {
                        couleur_red6.style.display='none';
                        couleur_green6.style.display='flex';
                        // Cocher tous les checkboxes
                        checkboxes6.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green6.style.display='flex';

                        });
                    }
                    updateCouleurGreenDisplay6();

                });
                couleur_red6.addEventListener('click', function(e){
                    if(couleur_red6.style.display === "flex"){
                        couleur_red6.style.display='none';
                        couleur_green6.style.display='flex';
                            // Cocher tous les checkboxes
                            checkboxes6.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green6.style.display='flex';

                        });

                    }else {
                        couleur_red6.style.display='flex';
                        couleur_green6.style.display='none';
                        // Cocher tous les checkboxes
                        checkboxes6.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });
                    }
                    updateCouleurGreenDisplay6();

                });
                updateCouleurGreenDisplay6();




                var couleur_red5 = document.getElementById('red_color5');
                var couleur_green5 = document.getElementById('green_color5');
                var checkboxcontainer5 = document.getElementById('checkbox-containers5');
                var checkboxes5 = document.querySelectorAll('#option2_classe input[type="checkbox"]');

                function updateCouleurGreenDisplay5() {
                    // Vérifie si toutes les cases sont cochées
                    const allChecked5 = Array.from(checkboxes5).every(checkbox => checkbox.checked);
                    couleur_green5.style.display = allChecked5 ? 'flex' : 'none';
                    couleur_red5.style.display = allChecked5 ? 'none' : 'flex';
                }

                // Écoute l'événement de changement sur chaque case à cocher
                checkboxes5.forEach(function(checkbox) {
                    checkbox.addEventListener('change', updateCouleurGreenDisplay5);
                });


                couleur_green5.addEventListener('click', function(e){
                    if(couleur_green5.style.display === "flex"){
                        couleur_red5.style.display='flex';
                        couleur_green5.style.display='none';
                            // Cocher tous les checkboxes
                            checkboxes5.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });

                    }else {
                        couleur_red5.style.display='none';
                        couleur_green5.style.display='flex';
                        // Cocher tous les checkboxes
                        checkboxes5.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green5.style.display='flex';

                        });
                    }
                    updateCouleurGreenDisplay5();

                });
                couleur_red5.addEventListener('click', function(e){
                    if(couleur_red5.style.display === "flex"){
                        couleur_red5.style.display='none';
                        couleur_green5.style.display='flex';
                            // Cocher tous les checkboxes
                            checkboxes5.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green5.style.display='flex';

                        });

                    }else {
                        couleur_red5.style.display='flex';
                        couleur_green5.style.display='none';
                        // Cocher tous les checkboxes
                        checkboxes5.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });
                    }
                    updateCouleurGreenDisplay5();

                });
                updateCouleurGreenDisplay5();




                var couleur_red4 = document.getElementById('red_color4');
                var couleur_green4 = document.getElementById('green_color4');
                var checkboxcontainer4 = document.getElementById('checkbox-containers4');
                var checkboxes4 = document.querySelectorAll('#option2_filiere input[type="checkbox"]');

                function updateCouleurGreenDisplay4() {
                    // Vérifie si toutes les cases sont cochées
                    const allChecked4 = Array.from(checkboxes4).every(checkbox => checkbox.checked);
                    couleur_green4.style.display = allChecked4 ? 'flex' : 'none';
                    couleur_red4.style.display = allChecked4? 'none' : 'flex';
                }

                // Écoute l'événement de changement sur chaque case à cocher
                checkboxes4.forEach(function(checkbox) {
                    checkbox.addEventListener('change', updateCouleurGreenDisplay4);
                });


                couleur_green4.addEventListener('click', function(e){
                    if(couleur_green4.style.display === "flex"){
                        couleur_red4.style.display='flex';
                        couleur_green4.style.display='none';
                            // Cocher tous les checkboxes
                            checkboxes4.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });

                    }else {
                        couleur_red4.style.display='none';
                        couleur_green4.style.display='flex';
                        // Cocher tous les checkboxes
                        checkboxes4.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green4.style.display='flex';

                        });
                    }
                    updateCouleurGreenDisplay4();

                });
                couleur_red4.addEventListener('click', function(e){
                    if(couleur_red4.style.display === "flex"){
                        couleur_red4.style.display='none';
                        couleur_green4.style.display='flex';
                            // Cocher tous les checkboxes
                            checkboxes4.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green4.style.display='flex';

                        });

                    }else {
                        couleur_red4.style.display='flex';
                        couleur_green4.style.display='none';
                        // Cocher tous les checkboxes
                        checkboxes4.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });
                    }
                    updateCouleurGreenDisplay4();

                });

                updateCouleurGreenDisplay4();



                var couleur_red3 = document.getElementById('red_color3');
                var couleur_green3 = document.getElementById('green_color3');
                var checkboxcontainer3 = document.getElementById('checkbox-containers3');
                var checkboxes3 = document.querySelectorAll('#option1_matiere input[type="checkbox"]');

                function updateCouleurGreenDisplay3() {
                    // Vérifie si toutes les cases sont cochées
                    const allChecked3 = Array.from(checkboxes3).every(checkbox => checkbox.checked);
                    couleur_green3.style.display = allChecked3 ? 'flex' : 'none';
                    couleur_red3.style.display = allChecked3 ? 'none' : 'flex';
                }

                // Écoute l'événement de changement sur chaque case à cocher
                checkboxes3.forEach(function(checkbox) {
                    checkbox.addEventListener('change', updateCouleurGreenDisplay3);
                });

                couleur_green3.addEventListener('click', function(e){
                    if(couleur_green3.style.display === "flex"){
                        couleur_red3.style.display='flex';
                        couleur_green3.style.display='none';
                            // Cocher tous les checkboxes
                            checkboxes3.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });

                    }else {
                        couleur_red3.style.display='none';
                        couleur_green3.style.display='flex';
                        // Cocher tous les checkboxes
                        checkboxes3.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green3.style.display='flex';
                        });
                    }
                    updateCouleurGreenDisplay3();

                });
                couleur_red3.addEventListener('click', function(e){
                    if(couleur_red3.style.display === "flex"){
                        couleur_red3.style.display='none';
                        couleur_green3.style.display='flex';
                            // Cocher tous les checkboxes
                            checkboxes3.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green3.style.display='flex';
                        });

                    }else {
                        couleur_red3.style.display='flex';
                        couleur_green3.style.display='none';
                        // Cocher tous les checkboxes
                        checkboxes3.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });
                    }
                    updateCouleurGreenDisplay3();

                });
                updateCouleurGreenDisplay3();




                var couleur_red2 = document.getElementById('red_color2');
                var couleur_green2 = document.getElementById('green_color2');
                var checkboxcontainer2 = document.getElementById('checkbox-containers2');
                var checkboxes2 = document.querySelectorAll('#option1_etudiant input[type="checkbox"]');

                function updateCouleurGreenDisplay2() {
                    // Vérifie si toutes les cases sont cochées
                    const allChecked2 = Array.from(checkboxes2).every(checkbox => checkbox.checked);
                    couleur_green2.style.display = allChecked2 ? 'flex' : 'none';
                    couleur_red2.style.display = allChecked2 ? 'none' : 'flex';
                }

                // Écoute l'événement de changement sur chaque case à cocher
                checkboxes2.forEach(function(checkbox) {
                    checkbox.addEventListener('change', updateCouleurGreenDisplay2);
                });


                couleur_green2.addEventListener('click', function(e){
                    if(couleur_green2.style.display === "flex"){
                        couleur_red2.style.display='flex';
                        couleur_green2.style.display='none';
                            // Cocher tous les checkboxes
                            checkboxes2.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });

                    }else {
                        couleur_red2.style.display='none';
                        couleur_green2.style.display='flex';
                        // Cocher tous les checkboxes
                        checkboxes2.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green2.style.display='flex';
                        });
                    }
                    updateCouleurGreenDisplay2();

                });
                couleur_red2.addEventListener('click', function(e){
                    if(couleur_red2.style.display === "flex"){
                        couleur_red2.style.display='none';
                        couleur_green2.style.display='flex';
                            // Cocher tous les checkboxes
                            checkboxes2.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green2.style.display='flex';

                        });

                    }else {
                        couleur_red2.style.display='flex';
                        couleur_green2.style.display='none';
                        // Cocher tous les checkboxes
                        checkboxes2.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });
                    }
                    updateCouleurGreenDisplay2();

                });
                updateCouleurGreenDisplay2();




                var couleur_red1 = document.getElementById('red_color1');
                var couleur_green1 = document.getElementById('green_color1');
                var checkboxcontainer1 = document.getElementById('checkbox-containers1');
                var checkboxes1 = document.querySelectorAll('#option1_enseignant input[type="checkbox"]');

                function updateCouleurGreenDisplay1() {
                    // Vérifie si toutes les cases sont cochées
                    const allChecked1 = Array.from(checkboxes1).every(checkbox => checkbox.checked);
                    couleur_green1.style.display = allChecked1 ? 'flex' : 'none';
                    couleur_red1.style.display = allChecked1 ? 'none' : 'flex';
                }

                // Écoute l'événement de changement sur chaque case à cocher
                checkboxes1.forEach(function(checkbox) {
                    checkbox.addEventListener('change', updateCouleurGreenDisplay1);
                });

                couleur_green1.addEventListener('click', function(e){
                    if(couleur_green1.style.display === "flex"){
                        couleur_red1.style.display='flex';
                        couleur_green1.style.display='none';
                            // Cocher tous les checkboxes
                            checkboxes1.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });

                    }else {
                        couleur_red1.style.display='none';
                        couleur_green1.style.display='flex';
                        // Cocher tous les checkboxes
                        checkboxes1.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green1.style.display='flex';
                        });
                    }
                    updateCouleurGreenDisplay1();

                });
                couleur_red1.addEventListener('click', function(e){
                    if(couleur_red1.style.display === "flex"){
                        couleur_red1.style.display='none';
                        couleur_green1.style.display='flex';
                            // Cocher tous les checkboxes
                            checkboxes1.forEach(function(checkbox) {
                            checkbox.checked = true;
                            couleur_green1.style.display='flex';
                        });

                    }else {
                        couleur_red1.style.display='flex';
                        couleur_green1.style.display='none';
                        // Cocher tous les checkboxes
                        checkboxes1.forEach(function(checkbox) {
                            checkbox.checked = false;
                        });
                    }
                    updateCouleurGreenDisplay1();

                });
                updateCouleurGreenDisplay1();

        });
</script>
<script>
       const fileInput = document.getElementById('file-input');
        const preview = document.getElementById('preview');
        const deleteButton = document.getElementById('delete-button');
        const downloadButton = document.getElementById('download-button');

        // Écouteur d'événement pour le champ d'entrée de fichier
        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    preview.src = event.target.result;
                    preview.style.display = 'block'; 
                }
                reader.readAsDataURL(file);
            }
        });

        deleteButton.addEventListener('click', function() {
            fileInput.value = ''; // Réinitialiser l'input
            preview.src = ''; // Réinitialiser l'image
            preview.style.display = 'none'; // Masquer l'image
        });

        downloadButton.addEventListener('click', function() {
            fileInput.click();
        });

        document.addEventListener('DOMContentLoaded', function () {
    const closeButton = document.querySelector('.custom-close-btn');
    const modal = document.getElementById('myModal');

    closeButton.addEventListener('click', function () {
        modal.style.display = 'none';
    });
});


</script>
<script>
        document.querySelector('.fa-sun1').addEventListener('click', function() {
            document.querySelector('.fa-sun').click(); // Simule un clic sur fa-sun
        });

        document.querySelector('.fa-moon1').addEventListener('click', function() {
            document.querySelector('.fa-moon').click(); // Simule un clic sur fa-moon
        });
    </script>
</body>

</html>
