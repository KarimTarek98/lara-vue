<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet" href="/css/app.css">
    <script nonce="ec62d069-76c6-4542-ade7-279949e5b96b">
        (function(w, d) {
            ! function(eK, eL, eM, eN) {
                eK.zarazData = eK.zarazData || {};
                eK.zarazData.executed = [];
                eK.zaraz = {
                    deferred: [],
                    listeners: []
                };
                eK.zaraz.q = [];
                eK.zaraz._f = function(eO) {
                    return function() {
                        var eP = Array.prototype.slice.call(arguments);
                        eK.zaraz.q.push({
                            m: eO,
                            a: eP
                        })
                    }
                };
                for (const eQ of ["track", "set", "debug"]) eK.zaraz[eQ] = eK.zaraz._f(eQ);
                eK.zaraz.init = () => {
                    var eR = eL.getElementsByTagName(eN)[0],
                        eS = eL.createElement(eN),
                        eT = eL.getElementsByTagName("title")[0];
                    eT && (eK.zarazData.t = eL.getElementsByTagName("title")[0].text);
                    eK.zarazData.x = Math.random();
                    eK.zarazData.w = eK.screen.width;
                    eK.zarazData.h = eK.screen.height;
                    eK.zarazData.j = eK.innerHeight;
                    eK.zarazData.e = eK.innerWidth;
                    eK.zarazData.l = eK.location.href;
                    eK.zarazData.r = eL.referrer;
                    eK.zarazData.k = eK.screen.colorDepth;
                    eK.zarazData.n = eL.characterSet;
                    eK.zarazData.o = (new Date).getTimezoneOffset();
                    if (eK.dataLayer)
                        for (const eX of Object.entries(Object.entries(dataLayer).reduce(((eY, eZ) => ({
                                ...eY[1],
                                ...eZ[1]
                            }))))) zaraz.set(eX[0], eX[1], {
                            scope: "page"
                        });
                    eK.zarazData.q = [];
                    for (; eK.zaraz.q.length;) {
                        const e_ = eK.zaraz.q.shift();
                        eK.zarazData.q.push(e_)
                    }
                    eS.defer = !0;
                    for (const fa of [localStorage, sessionStorage]) Object.keys(fa || {}).filter((fc => fc
                        .startsWith("_zaraz_"))).forEach((fb => {
                        try {
                            eK.zarazData["z_" + fb.slice(7)] = JSON.parse(fa.getItem(fb))
                        } catch {
                            eK.zarazData["z_" + fb.slice(7)] = fa.getItem(fb)
                        }
                    }));
                    eS.referrerPolicy = "origin";
                    eS.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(eK.zarazData)));
                    eR.parentNode.insertBefore(eS, eR)
                };
                ["complete", "interactive"].includes(eL.readyState) ? zaraz.init() : eK.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini">

        <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">
                <img src="./img/logo.png" alt="LaraVue Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Starter Pages
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inactive Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Simple Link
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's
                                        content.
                                    </p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the
                                        card's
                                        content.
                                    </p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">Featured</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Special title treatment</h6>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Featured</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Special title treatment</h6>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        
        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>


            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>
