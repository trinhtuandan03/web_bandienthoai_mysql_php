<!doctype html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/concept/pages/chart-chartist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jun 2024 18:13:23 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/static/admin/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/static/admin/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/admin/libs/css/style.css">
    <link rel="stylesheet" href="/static/admin/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="/static/admin/vendor/charts/chartist-bundle/chartist.css">
    <title>Quản Lý Doanh Thu Năm</title>
    <meta name="robots" content="noindex, nofollow">
    <script nonce="bea0a831-0822-4b06-8312-50544fd9fd85">
        try {
            (function (w, d) {
                ! function (j, k, l, m) {
                    j[l] = j[l] || {};
                    j[l].executed = [];
                    j.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    j.zaraz._v = "5671";
                    j.zaraz.q = [];
                    j.zaraz._f = function (n) {
                        return async function () {
                            var o = Array.prototype.slice.call(arguments);
                            j.zaraz.q.push({
                                m: n,
                                a: o
                            })
                        }
                    };
                    for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                    j.zaraz.init = () => {
                        var q = k.getElementsByTagName(m)[0],
                            r = k.createElement(m),
                            s = k.getElementsByTagName("title")[0];
                        s && (j[l].t = k.getElementsByTagName("title")[0].text);
                        j[l].x = Math.random();
                        j[l].w = j.screen.width;
                        j[l].h = j.screen.height;
                        j[l].j = j.innerHeight;
                        j[l].e = j.innerWidth;
                        j[l].l = j.location.href;
                        j[l].r = k.referrer;
                        j[l].k = j.screen.colorDepth;
                        j[l].n = k.characterSet;
                        j[l].o = (new Date).getTimezoneOffset();
                        if (j.dataLayer)
                            for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                                ...x[1],
                                ...y[1]
                            })), {}))) zaraz.set(w[0], w[1], {
                                scope: "page"
                            });
                        j[l].q = [];
                        for (; j.zaraz.q.length;) {
                            const z = j.zaraz.q.shift();
                            j[l].q.push(z)
                        }
                        r.defer = !0;
                        for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith("_zaraz_"))).forEach((B => {
                            try {
                                j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                            } catch {
                                j[l]["z_" + B.slice(7)] = A.getItem(B)
                            }
                        }));
                        r.referrerPolicy = "origin";
                        r.src = "https://colorlib.com/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                        q.parentNode.insertBefore(r, q)
                    };
                    ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body>



    <div class="dashboard-main-wrapper">



        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="https://colorlib.com//polygon/concept/index.html">5 con báo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span
                                    class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="https://colorlib.com//polygon/concept/assets/images/avatar-1.jpg" alt
                                    class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">5 Con Báo</h5>
                                    <span class="status"></span><span class="ml-2">Bio</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Tài Khoản </a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Cài Đặt </a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Đăng Xuất </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="nav-left-sidebar sidebar-dark">
            <%- include('../partical/menuManage') %>
        </div>
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Thống kê doanh thu năm</h2>
                        </div>
                    </div>
                </div>





            </div>
            <div class="footer">
                <%- include('../partical/footerManage') %>
            </div>
        </div>
    </div>
    <script src="https://colorlib.com//polygon/concept/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://colorlib.com//polygon/concept/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://colorlib.com//polygon/concept/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="https://colorlib.com//polygon/concept/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <script src="https://colorlib.com//polygon/concept/assets/vendor/charts/chartist-bundle/Chartistjs.js"></script>
    <script src="https://colorlib.com//polygon/concept/assets/libs/js/main-js.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587"
        integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA=="
        data-cf-beacon='{"rayId":"88fa604b0e42715e","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com//polygon/concept/pages/chart-chartist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jun 2024 18:13:24 GMT -->

</html>