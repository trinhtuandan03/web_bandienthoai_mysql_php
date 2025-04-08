﻿<!doctype html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/concept/pages/chart-chartist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jun 2024 18:13:23 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/bootstrap/css/bootstrap.min.css">
    <link href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/fonts/circular-std/style.css"
        rel="stylesheet">
    <link rel="stylesheet" href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/libs/css/style.css">
    <link rel="stylesheet"
        href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet"
        href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/charts/chartist-bundle/chartist.css">
    <title>Sửa sản phẩm</title>
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
        <?php include __DIR__ . '/../partical/headerManage.php'; ?>
        <div class="nav-left-sidebar sidebar-dark">
            <?php include __DIR__ . '/../partical/menuManage.php'; ?>
        </div>
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Sửa Sản Phẩm </h2>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <% if (error) { %>
                        <div class="alert alert-danger">
                            <%= error %>
                        </div>
                        <% } %>

                            <% if (product) { %>
                                <form action="/SanPhamManage/Edit" method="POST">
                                    <input type="hidden" name="_id" value="<%= product.id %>">

                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" class="form-control" name="name" value="<%= product.name %>"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input type="number" class="form-control" name="price"
                                            value="<%= product.price %>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea class="form-control" name="description"
                                            rows="5"><%= product.description %></textarea>
                                    </div>

                                    <% product.images.forEach((img, i)=> { %>
                                        <div class="form-group">
                                            <label>Hình ảnh <%= i + 1 %></label>
                                            <input type="text" class="form-control"
                                                name="URLImage<%= i === 0 ? '' : i %>" value="<%= img %>">
                                        </div>
                                        <% }) %>

                                            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
                                </form>
                                <% } %>
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