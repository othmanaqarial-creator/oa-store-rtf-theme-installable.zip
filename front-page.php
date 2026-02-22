<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-ar="متجر OA بريميوم - منصة تجارة إلكترونية متطورة" data-en="OA Premium Store - Advanced E-commerce Platform">متجر OA بريميوم - منصة تجارة إلكترونية متطورة</title>
    <meta name="description" content="متجر OA بريميوم يقدم نظام تجارة إلكترونية متكامل بلغتين مع لوحة إدارة متقدمة، سلة تسوق ذكية، وروابط دفع قابلة للتخصيص.">
    <meta name="keywords" content="متجر OA بريميوم, تجارة إلكترونية, سلة تسوق, لوحة تحكم, روابط دفع, ترجمة عربية إنجليزية">
    <meta property="og:title" content="متجر OA بريميوم - منصة تجارة إلكترونية متطورة">
    <meta property="og:description" content="منصة تجارة إلكترونية متقدمة مع لوحة إدارة متكاملة وسلة تسوق متطورة تدعم الربط المباشر بالبريد.">
    <meta property="og:image" content="https://picsum.photos/1200/630?random=1201">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://oapremiumstore.example.com">
    <link rel="icon" type="image/png" href="https://picsum.photos/64?random=1202">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#0f172a",
                        "secondary": "#1e293b",
                        "accent": "#2563eb",
                        "accent-light": "#3b82f6",
                        "highlight": "#8b5cf6",
                        "muted": "#64748b",
                        "success": "#22c55e",
                        "warning": "#facc15",
                        "danger": "#ef4444"
                    },
                    fontFamily: {
                        "arabic": ["Tajawal", "sans-serif"],
                        "latin": ["Inter", "sans-serif"]
                    }
                }
            }
        };
    </script>
    <style>
        body {
            font-family: "Tajawal", sans-serif;
        }
        body.lang-en {
            font-family: "Inter", sans-serif;
        }
        .category-chip {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .category-chip:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 35px -18px rgba(37, 99, 235, 0.35);
        }
        .product-card {
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }
        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 35px -20px rgba(15, 23, 42, 0.3);
            border-color: #2563eb;
        }
        .glass-panel {
            backdrop-filter: blur(14px);
            background-color: rgba(15, 23, 42, 0.65);
        }
        .scrollbar-thin::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        .scrollbar-thin::-webkit-scrollbar-track {
            background: rgba(148, 163, 184, 0.3);
            border-radius: 9999px;
        }
        .scrollbar-thin::-webkit-scrollbar-thumb {
            background: rgba(37, 99, 235, 0.75);
            border-radius: 9999px;
        }
    </style>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Store",
            "name": "متجر OA بريميوم",
            "image": "https://picsum.photos/320/200?random=1203",
            "url": "https://oapremiumstore.example.com",
            "description": "منصة تجارة إلكترونية ثنائية اللغة مع نظام إدارة متقدم وسلة تسوق ذكية.",
            "email": "orders@oapremiumstore.com",
            "telephone": "+966123456789",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "طريق الملك فهد",
                "addressLocality": "الرياض",
                "addressRegion": "الرياض",
                "postalCode": "12271",
                "addressCountry": "SA"
            },
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday",
                        "Sunday"
                    ],
                    "opens": "09:00",
                    "closes": "23:00"
                }
            ],
            "paymentAccepted": [
                "Visa",
                "MasterCard",
                "ApplePay",
                "Mada",
                "PayPal"
            ]
        }
    </script>

<?php wp_head(); ?>
</head>
<body class="bg-slate-50 text-slate-900 transition-colors duration-300">
    <div class="fixed top-4 left-4 z-50 flex flex-col space-y-3">
        <button id="languageToggle" class="px-4 py-2 rounded-full bg-white border border-slate-200 text-primary font-semibold shadow-sm hover:bg-slate-100 transition">
            EN
        </button>
        <button id="adminToggle" class="px-4 py-2 rounded-full bg-accent text-white font-semibold shadow-lg hover:bg-accent-light transition flex items-center space-x-2 space-x-reverse">
            <i class="fas fa-cogs text-sm"></i>
            <span data-ar="مركز الإدارة" data-en="Admin Center">مركز الإدارة</span>
        </button>
    </div>

    <div id="cartDrawer" class="fixed inset-0 hidden z-50">
        <div id="cartBackdrop" class="absolute inset-0 bg-slate-900 bg-opacity-60 backdrop-blur-sm"></div>
        <aside class="absolute top-0 right-0 h-full w-full sm:w-[420px] bg-white shadow-2xl flex flex-col transform transition-transform duration-300">
            <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
                <div class="flex items-center space-x-3 space-x-reverse">
                    <div class="w-12 h-12 rounded-full bg-accent bg-opacity-10 text-accent flex items-center justify-center">
                        <i class="fas fa-shopping-basket text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-primary" data-ar="سلة التسوق" data-en="Shopping Cart">سلة التسوق</h3>
                        <p class="text-xs text-muted" data-ar="تحكم بالعناصر وتابع للدفع الآمن." data-en="Manage items and proceed to secure checkout.">تحكم بالعناصر وتابع للدفع الآمن.</p>
                    </div>
                </div>
                <button id="closeCartButton" class="text-slate-500 hover:text-danger transition text-xl">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <div id="cartItemsContainer" class="flex-1 overflow-y-auto p-6 space-y-4 scrollbar-thin"></div>
            <div class="border-t border-slate-200 p-6 space-y-4">
                <div class="flex items-center justify-between text-sm text-muted">
                    <span data-ar="المجموع الفرعي" data-en="Subtotal">المجموع الفرعي</span>
                    <span id="cartSubtotal">0 ريال</span>
                </div>
                <div class="flex items-center justify-between text-sm text-muted">
                    <span data-ar="الضريبة (15%)" data-en="Tax (15%)">الضريبة (15%)</span>
                    <span id="cartTax">0 ريال</span>
                </div>
                <div class="flex items-center justify-between text-lg font-bold text-primary">
                    <span data-ar="الإجمالي" data-en="Total">الإجمالي</span>
                    <span id="cartTotal">0 ريال</span>
                </div>
                <button id="checkoutTrigger" class="w-full bg-accent hover:bg-accent-light text-white font-semibold py-3 rounded-xl transition flex items-center justify-center space-x-2 space-x-reverse">
                    <i class="fas fa-credit-card"></i>
                    <span data-ar="إتمام الطلب" data-en="Complete Order">إتمام الطلب</span>
                </button>
            </div>
        </aside>
    </div>

    <div id="adminCenter" class="fixed inset-0 hidden z-50">
        <div id="adminBackdrop" class="absolute inset-0 bg-slate-900 bg-opacity-70 backdrop-blur-md"></div>
        <div class="relative max-w-6xl mx-auto my-8 w-[95%]">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden admin-panel flex flex-col max-h-[92vh]">
                <header class="bg-slate-900 text-white px-8 py-6 flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-bold" data-ar="مركز إدارة متجر OA بريميوم" data-en="OA Premium Store Admin Hub">مركز إدارة متجر OA بريميوم</h2>
                        <p class="text-sm text-white text-opacity-70 mt-2" data-ar="تحكم كامل بالمنتجات، الأقسام، الطلبات، الشحن، التسويق، وروابط الدفع بواجهة مترجمة بالكامل." data-en="Complete control over products, categories, orders, shipping, marketing, and payment links with full bilingual interface.">تحكم كامل بالمنتجات، الأقسام، الطلبات، الشحن، التسويق، وروابط الدفع بواجهة مترجمة بالكامل.</p>
                    </div>
                    <button id="closeAdminButton" class="text-white text-2xl hover:text-accent-light transition">
                        <i class="fas fa-times-circle"></i>
                    </button>
                </header>
                <div class="flex flex-1 overflow-hidden">
                    <aside class="w-full lg:w-72 bg-slate-50 border-r border-slate-200 p-4 overflow-y-auto scrollbar-thin">
                        <nav class="space-y-2" id="adminTabsNav"></nav>
                    </aside>
                    <main class="flex-1 overflow-y-auto scrollbar-thin bg-white p-6 space-y-8" id="adminTabsContent"></main>
                </div>
            </div>
        </div>
    </div>

    <header class="bg-white border-b border-slate-200 shadow-sm sticky top-0 z-40">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between py-4 space-y-4 lg:space-y-0">
                <div class="flex items-center space-x-4 space-x-reverse">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-accent to-highlight text-white text-2xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-gem"></i>
                    </div>
                    <div>
                        <h1 id="storeNameHeading" class="text-2xl font-extrabold text-primary" data-ar="متجر OA بريميوم" data-en="OA Premium Store">متجر OA بريميوم</h1>
                        <p class="text-sm text-muted" data-ar="منصة تجارة إلكترونية متطورة ثنائية اللغة" data-en="Advanced bilingual e-commerce experience">منصة تجارة إلكترونية متطورة ثنائية اللغة</p>
                    </div>
                </div>
                <form id="globalSearchForm" class="relative flex-1 lg:max-w-2xl">
                    <input type="search" id="globalSearchInput" data-ar-placeholder="ابحث عن منتج، قسم، علامة أو كلمة مفتاحية" data-en-placeholder="Search products, categories, tags or keywords" placeholder="ابحث عن منتج، قسم، علامة أو كلمة مفتاحية" class="w-full border border-slate-200 rounded-full py-3 px-5 pr-14 pl-14 focus:outline-none focus:ring-2 focus:ring-accent transition">
                    <button type="submit" class="absolute top-1/2 transform -translate-y-1/2 right-4 text-accent hover:text-accent-light transition text-lg">
                        <i class="fas fa-search"></i>
                    </button>
                    <span class="absolute top-1/2 transform -translate-y-1/2 left-4 text-slate-400 text-xs" data-ar="Ctrl + K" data-en="Ctrl + K">Ctrl + K</span>
                </form>
                <div class="flex items-center space-x-3 space-x-reverse">
                    <a href="#!" onclick="handleLink(event, 'supportSection')" class="px-4 py-2 rounded-full border border-slate-200 text-primary font-semibold hover:border-accent hover:text-accent transition flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-headset"></i>
                        <span data-ar="دعم 24/7" data-en="24/7 Support">دعم 24/7</span>
                    </a>
                    <button id="openCartButton" class="relative bg-accent text-white w-12 h-12 rounded-full flex items-center justify-center text-xl shadow-lg hover:bg-accent-light transition">
                        <i class="fas fa-shopping-cart"></i>
                        <span id="miniCartCount" class="absolute -top-1 -right-1 bg-white text-accent text-xs font-bold rounded-full w-6 h-6 flex items-center justify-center shadow-md">0</span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="bg-white border-t border-b border-slate-200">
            <div class="container mx-auto px-4">
                <div id="categoryNavigation" class="flex overflow-x-auto space-x-4 space-x-reverse py-3"></div>
            </div>
        </nav>
    </header>

    <main>
        <section class="relative overflow-hidden">
            <div class="absolute inset-0">
                <img src="https://picsum.photos/1440/720?random=1204" alt="Dynamic business background showing premium shopping experience" loading="lazy" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-br from-primary via-secondary to-primary opacity-90"></div>
            </div>
            <div class="relative container mx-auto px-4 py-16 lg:py-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="text-white space-y-6">
                        <span class="inline-flex items-center bg-white bg-opacity-15 px-4 py-1 rounded-full text-xs font-semibold uppercase tracking-widest">
                            <i class="fas fa-language ml-2"></i>
                            <span data-ar="واجهة عربية وإنجليزية" data-en="Arabic & English Interface">واجهة عربية وإنجليزية</span>
                        </span>
                        <h2 class="text-4xl lg:text-5xl font-extrabold leading-snug" data-ar="منصة تجارة إلكترونية بمرونة الإدارة الكاملة" data-en="Commerce Platform With Unmatched Administrative Flexibility">منصة تجارة إلكترونية بمرونة الإدارة الكاملة</h2>
                        <p class="text-lg text-white text-opacity-80" data-ar="تحكم بالمتجر من أول منتج حتى آخر طلب. تدعم اللوحة الثنائية اللغة، مزامنة السلة مع صفحة الدفع، وربط الطلبات مباشرة ببريدك الإلكتروني." data-en="Manage your store from the first product to the last order. Enjoy a bilingual admin console, synchronized cart and checkout, and direct order handoff to your email.">تحكم بالمتجر من أول منتج حتى آخر طلب. تدعم اللوحة الثنائية اللغة، مزامنة السلة مع صفحة الدفع، وربط الطلبات مباشرة ببريدك الإلكتروني.</p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#!" onclick="handleLink(event, 'featuredProductsSection')" class="bg-white text-primary font-semibold px-6 py-3 rounded-full hover:bg-accent hover:text-white transition flex items-center space-x-2 space-x-reverse">
                                <i class="fas fa-shopping-bag"></i>
                                <span data-ar="ابدأ التسوق الآن" data-en="Start Shopping Now">ابدأ التسوق الآن</span>
                            </a>
                            <a href="#!" onclick="handleLink(event, 'platformHighlightsSection')" class="border border-white text-white font-semibold px-6 py-3 rounded-full hover:bg-white hover:text-primary transition flex items-center space-x-2 space-x-reverse">
                                <i class="fas fa-sparkles"></i>
                                <span data-ar="ميزات المنصة" data-en="Platform Features">ميزات المنصة</span>
                            </a>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="glass-panel rounded-2xl p-4 border border-white border-opacity-20">
                                <p class="text-xs text-white text-opacity-60" data-ar="معدل إتمام الطلب" data-en="Checkout Conversion">معدل إتمام الطلب</p>
                                <p class="text-2xl font-extrabold mt-2">92%</p>
                                <p class="text-xs text-success mt-1">+12%</p>
                            </div>
                            <div class="glass-panel rounded-2xl p-4 border border-white border-opacity-20">
                                <p class="text-xs text-white text-opacity-60" data-ar="طلبات هذا الأسبوع" data-en="Orders This Week">طلبات هذا الأسبوع</p>
                                <p class="text-2xl font-extrabold mt-2">184</p>
                                <p class="text-xs text-success mt-1">+21</p>
                            </div>
                            <div class="glass-panel rounded-2xl p-4 border border-white border-opacity-20">
                                <p class="text-xs text-white text-opacity-60" data-ar="وسائل الدفع المفعلة" data-en="Active Payment Methods">وسائل الدفع المفعلة</p>
                                <p class="text-2xl font-extrabold mt-2" id="heroPaymentsCount">0</p>
                                <p class="text-xs text-warning mt-1" data-ar="يمكن إضافة المزيد من لوحة الإدارة" data-en="Add more in Admin Center">يمكن إضافة المزيد من لوحة الإدارة</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden">
                        <div class="p-6 border-b border-slate-200">
                            <h3 class="text-xl font-bold text-primary" data-ar="أحدث الطلبات" data-en="Latest Orders">أحدث الطلبات</h3>
                            <p class="text-xs text-muted" data-ar="إطلالة لحظية على نشاط متجر OA بريميوم" data-en="Live snapshot of OA Premium Store activity">إطلالة لحظية على نشاط متجر OA بريميوم</p>
                        </div>
                        <div id="heroOrdersList" class="divide-y divide-slate-100"></div>
                        <div class="p-6 bg-slate-50 flex items-center justify-between">
                            <div>
                                <p class="text-xs text-muted" data-ar="الطلبات قيد المتابعة" data-en="Pending follow-up">الطلبات قيد المتابعة</p>
                                <p id="heroPendingCount" class="text-lg font-bold text-primary">0</p>
                            </div>
                            <a href="#!" onclick="handleLink(event, 'ordersTab')" class="text-accent font-semibold hover:text-accent-light transition flex items-center space-x-2 space-x-reverse">
                                <span data-ar="إدارة الطلبات" data-en="Manage Orders">إدارة الطلبات</span>
                                <i class="fas fa-arrow-left text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="platformHighlightsSection" class="container mx-auto px-4 py-14">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm">
                    <div class="w-12 h-12 rounded-2xl bg-accent bg-opacity-10 text-accent flex items-center justify-center text-xl mb-4">
                        <i class="fas fa-language"></i>
                    </div>
                    <h3 class="text-lg font-bold text-primary mb-2" data-ar="ترجمة لحظية كاملة" data-en="Instant Full Translation">ترجمة لحظية كاملة</h3>
                    <p class="text-sm text-muted" data-ar="واجهات المنصة، البيانات، الأزرار، رسائل النظام وحتى الحقول الإدارية تتحول فوراً بين العربية والإنجليزية." data-en="Interface, data labels, system messages, and admin fields switch instantly between Arabic and English.">واجهات المنصة، البيانات، الأزرار، رسائل النظام وحتى الحقول الإدارية تتحول فوراً بين العربية والإنجليزية.</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm">
                    <div class="w-12 h-12 rounded-2xl bg-success bg-opacity-10 text-success flex items-center justify-center text-xl mb-4">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3 class="text-lg font-bold text-primary mb-2" data-ar="لوحة إدارة متقدمة" data-en="Advanced Admin Console">لوحة إدارة متقدمة</h3>
                    <p class="text-sm text-muted" data-ar="تحكم بالمنتجات، المخزون، الأقسام، روابط الدفع، الشحن، حملات التسويق، والمشتركين من لوحة واحدة." data-en="Control products, inventory, categories, payment links, shipping, campaigns, and subscribers from one place.">تحكم بالمنتجات، المخزون، الأقسام، روابط الدفع، الشحن، حملات التسويق، والمشتركين من لوحة واحدة.</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm">
                    <div class="w-12 h-12 rounded-2xl bg-warning bg-opacity-15 text-warning flex items-center justify-center text-xl mb-4">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="text-lg font-bold text-primary mb-2" data-ar="سلة تسوق ذكية" data-en="Smart Shopping Cart">سلة تسوق ذكية</h3>
                    <p class="text-sm text-muted" data-ar="تحديث تلقائي للضرائب والأسعار، إدارة الكميات، وتزامن مباشر مع صفحة الدفع المخصصة." data-en="Automatic tax and pricing updates, quantity management, and direct sync with the dedicated checkout page.">تحديث تلقائي للضرائب والأسعار، إدارة الكميات، وتزامن مباشر مع صفحة الدفع المخصصة.</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm">
                    <div class="w-12 h-12 rounded-2xl bg-highlight bg-opacity-15 text-highlight flex items-center justify-center text-xl mb-4">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <h3 class="text-lg font-bold text-primary mb-2" data-ar="إرسال الطلب للبريد فوراً" data-en="Instant Email Order Dispatch">إرسال الطلب للبريد فوراً</h3>
                    <p class="text-sm text-muted" data-ar="زر إتمام الطلب يجهز رسالة إلكترونية كاملة التفاصيل لإرسالها مباشرة إلى البريد المخصص." data-en="Checkout button prepares a complete order email ready to send to your dedicated mailbox.">زر إتمام الطلب يجهز رسالة إلكترونية كاملة التفاصيل لإرسالها مباشرة إلى البريد المخصص.</p>
                </div>
            </div>
        </section>

        <section id="searchResultsSection" class="container mx-auto px-4 hidden">
            <div class="bg-white border border-accent rounded-3xl shadow-xl p-6 mb-10">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold text-primary" data-ar="نتائج البحث" data-en="Search Results">نتائج البحث</h3>
                    <button id="closeSearchResults" class="text-slate-500 hover:text-danger transition text-lg">
                        <i class="fas fa-times-circle"></i>
                    </button>
                </div>
                <div id="searchResultsGrid" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6"></div>
            </div>
        </section>

        <section id="featuredProductsSection" class="container mx-auto px-4 py-14">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-8 space-y-4 lg:space-y-0">
                <div>
                    <h2 class="text-3xl font-extrabold text-primary" data-ar="مختارات متجر OA بريميوم" data-en="OA Premium Featured Picks">مختارات متجر OA بريميوم</h2>
                    <p class="text-sm text-muted" data-ar="منتجات مختارة بعناية مع عروض وشحن فوري." data-en="Handpicked items with exclusive offers and express shipping.">منتجات مختارة بعناية مع عروض وشحن فوري.</p>
                </div>
                <a href="#!" onclick="handleLink(event, 'categoriesShowcase')" class="text-accent font-semibold hover:text-accent-light transition flex items-center space-x-2 space-x-reverse">
                    <span data-ar="عرض جميع الأقسام" data-en="View All Categories">عرض جميع الأقسام</span>
                    <i class="fas fa-arrow-left text-xs"></i>
                </a>
            </div>
            <div id="featuredProductsGrid" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6"></div>
        </section>

        <section id="categoriesShowcase" class="bg-slate-100 border-y border-slate-200 py-14">
            <div class="container mx-auto px-4 space-y-10" id="categoriesSections"></div>
        </section>

        <section class="container mx-auto px-4 py-14">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-sm">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-accent bg-opacity-10 text-accent flex items-center justify-center text-xl">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="mr-3">
                            <h3 class="text-2xl font-bold text-primary" data-ar="وسائل الدفع المفعلة" data-en="Active Payment Methods">وسائل الدفع المفعلة</h3>
                            <p class="text-sm text-muted" data-ar="أدر روابط الدفع من لوحة التحكم مع أيقونات مخصصة وروابط مباشرة." data-en="Manage payment links from admin with branded icons and direct URLs.">أدر روابط الدفع من لوحة التحكم مع أيقونات مخصصة وروابط مباشرة.</p>
                        </div>
                    </div>
                    <div id="paymentHighlightsGrid" class="grid grid-cols-2 gap-4"></div>
                </div>
                <div class="bg-gradient-to-br from-primary via-secondary to-primary text-white rounded-3xl p-8 shadow-2xl">
                    <h3 class="text-2xl font-extrabold mb-4" data-ar="إدارة البريد والطلبات" data-en="Email & Order Management">إدارة البريد والطلبات</h3>
                    <p class="text-sm text-white text-opacity-80 mb-6" data-ar="اضبط البريد المخصص للطلبات، أرسل الإشعارات، واستقبل تنبيهات الاشتراكات من نفس المنصة." data-en="Configure your orders mailbox, send alerts, and capture subscriptions in one place.">اضبط البريد المخصص للطلبات، أرسل الإشعارات، واستقبل تنبيهات الاشتراكات من نفس المنصة.</p>
                    <div class="space-y-4">
                        <div class="bg-white bg-opacity-15 rounded-2xl p-5 flex items-center space-x-4 space-x-reverse">
                            <div class="w-12 h-12 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
                                <i class="fas fa-inbox text-lg"></i>
                            </div>
                            <div>
                                <p class="text-xs text-white text-opacity-70" data-ar="البريد الحالي للطلبات" data-en="Current Orders Email">البريد الحالي للطلبات</p>
                                <p id="orderEmailDisplay" class="text-lg font-semibold">orders@oapremiumstore.com</p>
                            </div>
                        </div>
                        <div class="bg-white bg-opacity-15 rounded-2xl p-5 flex items-center space-x-4 space-x-reverse">
                            <div class="w-12 h-12 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
                                <i class="fas fa-bell text-lg"></i>
                            </div>
                            <div>
                                <p class="text-xs text-white text-opacity-70" data-ar="تنبيهات فورية لكل طلب" data-en="Instant alerts per order">تنبيهات فورية لكل طلب</p>
                                <p class="text-xs text-white text-opacity-70" data-ar="يتم تجهيز رسالة البريد تلقائياً مع تفاصيل السلة." data-en="Email template is auto-prepared with cart breakdown.">يتم تجهيز رسالة البريد تلقائياً مع تفاصيل السلة.</p>
                            </div>
                        </div>
                        <a href="#!" onclick="handleLink(event, 'settingsTab')" class="inline-flex items-center justify-center px-5 py-3 bg-white text-primary font-semibold rounded-full hover:bg-slate-100 transition">
                            <i class="fas fa-sliders-h ml-2"></i>
                            <span data-ar="إدارة إعدادات المتجر" data-en="Manage Store Settings">إدارة إعدادات المتجر</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="supportSection" class="bg-slate-900 text-white py-14">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2 space-y-6">
                        <h3 class="text-3xl font-extrabold" data-ar="دعم تشغيلي وتقني متكامل" data-en="Comprehensive Operational & Technical Support">دعم تشغيلي وتقني متكامل</h3>
                        <p class="text-white text-opacity-80" data-ar="نرافقك في جميع مراحل تشغيل المتجر: إدارة الطلبات، تفعيل روابط الدفع، إعداد الحملات البريدية، وضمان تجربة مستخدم سلسة للعملاء." data-en="We support every stage of your store operation: order handling, payment activation, campaign setup, and smooth customer experience.">نرافقك في جميع مراحل تشغيل المتجر: إدارة الطلبات، تفعيل روابط الدفع، إعداد الحملات البريدية، وضمان تجربة مستخدم سلسة للعملاء.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="bg-white bg-opacity-10 rounded-2xl p-5">
                                <div class="flex items-center space-x-3 space-x-reverse mb-3">
                                    <div class="w-10 h-10 rounded-full bg-success bg-opacity-15 flex items-center justify-center text-success">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs text-white text-opacity-60" data-ar="هاتف خدمة العملاء" data-en="Support Hotline">هاتف خدمة العملاء</p>
                                        <p id="supportPhoneDisplay" class="text-lg font-semibold">+966 123 456 789</p>
                                    </div>
                                </div>
                                <p class="text-xs text-white text-opacity-60" data-ar="يمكن تعديل الرقم من الإعدادات." data-en="Editable from settings.">يمكن تعديل الرقم من الإعدادات.</p>
                            </div>
                            <div class="bg-white bg-opacity-10 rounded-2xl p-5">
                                <div class="flex items-center space-x-3 space-x-reverse mb-3">
                                    <div class="w-10 h-10 rounded-full bg-accent bg-opacity-15 flex items-center justify-center text-accent">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs text-white text-opacity-60" data-ar="موقع المتجر" data-en="Store Location">موقع المتجر</p>
                                        <p id="storeAddressDisplay" class="text-lg font-semibold">الرياض، المملكة العربية السعودية</p>
                                    </div>
                                </div>
                                <p class="text-xs text-white text-opacity-60" data-ar="عدّل العنوان ليظهر في كل أقسام الموقع." data-en="Customize address across the platform from settings.">عدّل العنوان ليظهر في كل أقسام الموقع.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white text-primary rounded-3xl p-6 shadow-xl">
                        <h4 class="text-xl font-bold mb-4" data-ar="تواصل معنا فوراً" data-en="Contact Us Directly">تواصل معنا فوراً</h4>
                        <form id="contactForm" class="space-y-4">
                            <div>
                                <label class="block text-xs font-semibold text-muted mb-1" data-ar="اسمك الكامل" data-en="Full Name">اسمك الكامل</label>
                                <input type="text" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-muted mb-1" data-ar="بريدك الإلكتروني" data-en="Email Address">بريدك الإلكتروني</label>
                                <input type="email" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-muted mb-1" data-ar="رسالتك" data-en="Your Message">رسالتك</label>
                                <textarea class="w-full border border-slate-200 rounded-xl px-4 py-3 h-32 focus:outline-none focus:ring-2 focus:ring-accent" required></textarea>
                            </div>
                            <button type="submit" class="w-full bg-accent text-white font-semibold py-3 rounded-xl hover:bg-accent-light transition flex items-center justify-center space-x-2 space-x-reverse">
                                <i class="fas fa-paper-plane"></i>
                                <span data-ar="إرسال" data-en="Send">إرسال</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-14">
            <div class="container mx-auto px-4">
                <div class="bg-slate-900 text-white rounded-3xl p-10 shadow-2xl relative overflow-hidden">
                    <div class="absolute inset-0 opacity-15">
                        <img src="https://picsum.photos/960/480?random=1205" alt="Newsletter abstract background for OA Premium Store" loading="lazy" class="w-full h-full object-cover">
                    </div>
                    <div class="relative z-10 flex flex-col lg:flex-row items-center lg:items-start justify-between gap-10">
                        <div class="lg:max-w-lg">
                            <span class="inline-flex items-center bg-white bg-opacity-15 px-4 py-1 rounded-full text-xs font-semibold uppercase tracking-widest mb-4">
                                <i class="fas fa-envelope ml-2"></i>
                                <span data-ar="النشرة البريدية المتقدمة" data-en="Advanced Newsletter">النشرة البريدية المتقدمة</span>
                            </span>
                            <h3 class="text-3xl font-extrabold mb-4" data-ar="انضم إلى مجتمع متجر OA بريميوم" data-en="Join the OA Premium Community">انضم إلى مجتمع متجر OA بريميوم</h3>
                            <p class="text-sm text-white text-opacity-80" data-ar="استقبل تحديثات المخزون، عروض الدفع، وتنبيهات الطلبات في بريدك. يتم مزامنة المشتركين تلقائياً مع لوحة الإدارة." data-en="Receive inventory updates, payment promotions, and order alerts. Subscribers sync instantly with the admin hub.">استقبل تحديثات المخزون، عروض الدفع، وتنبيهات الطلبات في بريدك. يتم مزامنة المشتركين تلقائياً مع لوحة الإدارة.</p>
                        </div>
                        <form id="newsletterForm" class="w-full lg:max-w-md bg-white bg-opacity-10 rounded-2xl p-6 space-y-4">
                            <div>
                                <label class="block text-xs text-white text-opacity-70 mb-1" data-ar="البريد الإلكتروني" data-en="Email Address">البريد الإلكتروني</label>
                                <input type="email" id="newsletterEmail" data-ar-placeholder="أدخل بريدك الإلكتروني" data-en-placeholder="Enter your email address" placeholder="أدخل بريدك الإلكتروني" class="w-full border border-white border-opacity-30 bg-white bg-opacity-20 text-white rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent placeholder-white placeholder-opacity-60" required>
                            </div>
                            <button type="submit" class="w-full bg-white text-primary font-bold py-3 rounded-xl hover:bg-slate-100 transition flex items-center justify-center space-x-2 space-x-reverse">
                                <i class="fas fa-user-plus"></i>
                                <span data-ar="اشترك الآن" data-en="Subscribe Now">اشترك الآن</span>
                            </button>
                            <p class="text-xs text-white text-opacity-60" data-ar="يمكنك إدارة المشتركين وحذفهم أو تصديرهم من لوحة الإدارة." data-en="Manage, delete, or export subscribers from the admin center.">يمكنك إدارة المشتركين وحذفهم أو تصديرهم من لوحة الإدارة.</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div id="cookieBanner" class="fixed bottom-4 right-4 left-4 sm:left-auto sm:w-96 bg-white border border-slate-200 rounded-3xl shadow-2xl p-6 hidden z-40">
            <div class="flex items-center mb-3">
                <div class="w-10 h-10 rounded-full bg-accent bg-opacity-10 text-accent flex items-center justify-center text-lg">
                    <i class="fas fa-cookie-bite"></i>
                </div>
                <h4 class="text-lg font-semibold text-primary mr-3" data-ar="ملفات تعريف الارتباط" data-en="Cookies Notice">ملفات تعريف الارتباط</h4>
            </div>
            <p class="text-sm text-muted mb-4" data-ar="نستخدم ملفات تعريف الارتباط لتخصيص العروض وتجربة التسوق. بالمتابعة فإنك توافق على ذلك." data-en="We use cookies to personalize offers and your shopping experience. By continuing you agree.">نستخدم ملفات تعريف الارتباط لتخصيص العروض وتجربة التسوق. بالمتابعة فإنك توافق على ذلك.</p>
            <button id="acceptCookiesButton" class="w-full bg-accent text-white font-semibold py-2 rounded-xl hover:bg-accent-light transition">
                <span data-ar="موافق" data-en="Accept">موافق</span>
            </button>
        </div>
    </main>

    <footer class="bg-slate-900 text-white pt-14">
        <div class="container mx-auto px-4 pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <div>
                    <div class="flex items-center space-x-3 space-x-reverse mb-4">
                        <div class="w-10 h-10 rounded-full bg-white bg-opacity-15 flex items-center justify-center">
                            <i class="fas fa-gem"></i>
                        </div>
                        <h4 class="text-xl font-bold" data-ar="متجر OA بريميوم" data-en="OA Premium Store">متجر OA بريميوم</h4>
                    </div>
                    <p class="text-xs text-white text-opacity-70" data-ar="حل تجارة إلكترونية شامل بإدارة مترجمة بالكامل، سلة متزامنة، وروابط دفع قابلة للتخصيص." data-en="Comprehensive commerce solution with bilingual admin, synchronized cart, and customizable payment links.">حل تجارة إلكترونية شامل بإدارة مترجمة بالكامل، سلة متزامنة، وروابط دفع قابلة للتخصيص.</p>
                    <div class="flex items-center space-x-3 space-x-reverse mt-4">
                        <a href="#!" onclick="handleLink(event)" class="w-10 h-10 rounded-full border border-white border-opacity-20 flex items-center justify-center hover:bg-white hover:text-primary transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#!" onclick="handleLink(event)" class="w-10 h-10 rounded-full border border-white border-opacity-20 flex items-center justify-center hover:bg-white hover:text-primary transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#!" onclick="handleLink(event)" class="w-10 h-10 rounded-full border border-white border-opacity-20 flex items-center justify-center hover:bg-white hover:text-primary transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#!" onclick="handleLink(event)" class="w-10 h-10 rounded-full border border-white border-opacity-20 flex items-center justify-center hover:bg-white hover:text-primary transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4" data-ar="روابط سريعة" data-en="Quick Links">روابط سريعة</h5>
                    <ul class="space-y-2 text-xs text-white text-opacity-70">
                        <li><a href="#!" onclick="handleLink(event, 'featuredProductsSection')" class="hover:text-white transition" data-ar="المنتجات المميزة" data-en="Featured Products">المنتجات المميزة</a></li>
                        <li><a href="#!" onclick="handleLink(event, 'categoriesShowcase')" class="hover:text-white transition" data-ar="الأقسام" data-en="Categories">الأقسام</a></li>
                        <li><a href="#!" onclick="handleLink(event, 'platformHighlightsSection')" class="hover:text-white transition" data-ar="ميزات المنصة" data-en="Platform Features">ميزات المنصة</a></li>
                        <li><a href="#!" onclick="handleLink(event, 'supportSection')" class="hover:text-white transition" data-ar="الدعم الفني" data-en="Support">الدعم الفني</a></li>
                        <li><a href="#!" onclick="handleLink(event)" class="hover:text-white transition" data-ar="سياسة الخصوصية" data-en="Privacy Policy">سياسة الخصوصية</a></li>
                        <li><a href="#!" onclick="handleLink(event)" class="hover:text-white transition" data-ar="الشروط والأحكام" data-en="Terms & Conditions">الشروط والأحكام</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4" data-ar="روابط الدفع" data-en="Payment Links">روابط الدفع</h5>
                    <div id="footerPaymentGrid" class="grid grid-cols-2 gap-3"></div>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4" data-ar="تواصل معنا" data-en="Contact Us">تواصل معنا</h5>
                    <ul class="space-y-3 text-xs text-white text-opacity-70">
                        <li class="flex items-center space-x-3 space-x-reverse">
                            <i class="fas fa-map-marker-alt text-accent"></i>
                            <span id="footerAddressDisplay">الرياض، المملكة العربية السعودية</span>
                        </li>
                        <li class="flex items-center space-x-3 space-x-reverse">
                            <i class="fas fa-phone text-accent"></i>
                            <span id="footerPhoneDisplay">+966 123 456 789</span>
                        </li>
                        <li class="flex items-center space-x-3 space-x-reverse">
                            <i class="fas fa-envelope text-accent"></i>
                            <span id="footerEmailDisplay">orders@oapremiumstore.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white border-opacity-10 mt-10">
                <div class="container mx-auto px-4 py-6 flex flex-col md:flex-row items-center justify-between text-xs text-white text-opacity-60">
                    <p data-ar="© جميع الحقوق محفوظة لمتجر OA بريميوم 2024" data-en="© OA Premium Store. All Rights Reserved 2024">© جميع الحقوق محفوظة لمتجر OA بريميوم 2024</p>
                    <p data-ar="منصة تجارة إلكترونية مترجمة بالكامل مع نظام إدارة متقدم وسلة متزامنة." data-en="Bilingual commerce platform with advanced admin hub and synchronized cart.">منصة تجارة إلكترونية مترجمة بالكامل مع نظام إدارة متقدم وسلة متزامنة.</p>
                </div>
            </div>
        </footer>

    <script>
        const USD_RATE = 0.27;
        const DEFAULT_PRODUCT_IMAGE = "https://picsum.photos/320/220?random=1299";
        const state = {
            "language": "ar",
            "cart": [],
            "storeName": localStorage.getItem("oa_store_name") || "متجر OA بريميوم",
            "orderEmail": localStorage.getItem("oa_order_email") || "orders@oapremiumstore.com",
            "supportPhone": localStorage.getItem("oa_support_phone") || "+966 123 456 789",
            "storeAddress": localStorage.getItem("oa_store_address") || "الرياض، المملكة العربية السعودية",
            "storeOnline": JSON.parse(localStorage.getItem("oa_store_online") || "true"),
            "categories": [
                { "id": "comp", "nameAr": "أجهزة الكمبيوتر", "nameEn": "Computers", "icon": "fas fa-laptop-code", "color": "bg-blue-100 text-blue-600" },
                { "id": "phones", "nameAr": "الهواتف الذكية", "nameEn": "Smartphones", "icon": "fas fa-mobile-alt", "color": "bg-green-100 text-green-600" },
                { "id": "fashion", "nameAr": "الأزياء والفخامة", "nameEn": "Luxury Fashion", "icon": "fas fa-tshirt", "color": "bg-purple-100 text-purple-600" },
                { "id": "home", "nameAr": "المنزل والمطبخ", "nameEn": "Home & Kitchen", "icon": "fas fa-couch", "color": "bg-yellow-100 text-yellow-600" },
                { "id": "beauty", "nameAr": "الجمال والعناية", "nameEn": "Beauty & Care", "icon": "fas fa-heartbeat", "color": "bg-pink-100 text-pink-600" },
                { "id": "gaming", "nameAr": "الألعاب والترفيه", "nameEn": "Gaming & Entertainment", "icon": "fas fa-gamepad", "color": "bg-indigo-100 text-indigo-600" },
                { "id": "books", "nameAr": "الكتب والمجلات", "nameEn": "Books & Magazines", "icon": "fas fa-book-open", "color": "bg-red-100 text-red-600" },
                { "id": "sports", "nameAr": "اللياقة والرياضة", "nameEn": "Fitness & Sports", "icon": "fas fa-dumbbell", "color": "bg-teal-100 text-teal-600" }
            ],
            "products": [
                { "id": "p1", "category": "comp", "nameAr": "حاسب محمول برو ماستر", "nameEn": "Pro Master Laptop", "descriptionAr": "معالج Intel i9، ذاكرة 32 جيجابايت، تخزين 1 تيرابايت SSD وشاشة 4K.", "descriptionEn": "Intel i9 CPU, 32GB RAM, 1TB SSD, and 4K display.", "price": 6499, "stock": 14, "image": "https://picsum.photos/320/220?random=1301", "badgeAr": "الأكثر مبيعاً", "badgeEn": "Best Seller" },
                { "id": "p2", "category": "comp", "nameAr": "حاسب مكتبي متكامل 5K", "nameEn": "All-in-One 5K Desktop", "descriptionAr": "شاشة 27 بوصة 5K، معالج M-series، لوحة مفاتيح لاسلكية.", "descriptionEn": "27-inch 5K display, M-series chip, wireless peripherals.", "price": 5299, "stock": 8, "image": "https://picsum.photos/320/220?random=1302" },
                { "id": "p3", "category": "phones", "nameAr": "هاتف فئة برو ماكس", "nameEn": "Pro Max Smartphone", "descriptionAr": "كاميرا 108 ميجابكسل، دعم 5G، بطارية 5200 مللي أمبير، مقاوم للماء.", "descriptionEn": "108MP camera, 5G, 5200mAh battery, water resistant.", "price": 3899, "stock": 23, "image": "https://picsum.photos/320/220?random=1303", "badgeAr": "شحن مجاني", "badgeEn": "Free Shipping" },
                { "id": "p4", "category": "phones", "nameAr": "هاتف ذكي اقتصادي", "nameEn": "Value Smart Phone", "descriptionAr": "شاشة AMOLED، بطارية 4500 مللي أمبير، بصمة مدمجة.", "descriptionEn": "AMOLED display, 4500mAh battery, integrated fingerprint.", "price": 1399, "stock": 40, "image": "https://picsum.photos/320/220?random=1304" },
                { "id": "p5", "category": "fashion", "nameAr": "معطف شتوي فاخر بالكشمير", "nameEn": "Luxury Cashmere Coat", "descriptionAr": "كشمير طبيعي مع بطانة عازلة ومقاومة للمطر.", "descriptionEn": "Pure cashmere coat with insulated rainproof lining.", "price": 1199, "stock": 15, "image": "https://picsum.photos/320/220?random=1305" },
                { "id": "p6", "category": "fashion", "nameAr": "حقيبة جلدية حصرية", "nameEn": "Exclusive Leather Tote", "descriptionAr": "جلد إيطالي طبيعي، جيوب داخلية، حزام كتف قابل للإزالة.", "descriptionEn": "Italian leather, inner pockets, detachable strap.", "price": 749, "stock": 26, "image": "https://picsum.photos/320/220?random=1306", "badgeAr": "إصدار محدود", "badgeEn": "Limited Edition" },
                { "id": "p7", "category": "home", "nameAr": "خلاط مطبخ ذكي", "nameEn": "Smart Kitchen Blender", "descriptionAr": "قوة 1500 واط، برامج مسبقة، شاشة لمس.", "descriptionEn": "1500W power, preset programs, touch screen.", "price": 799, "stock": 34, "image": "https://picsum.photos/320/220?random=1307" },
                { "id": "p8", "category": "home", "nameAr": "طقم أواني طهي تيتانيوم", "nameEn": "Titanium Cookware Set", "descriptionAr": "12 قطعة، مقاومة للخدش، متوافقة مع جميع المواقد.", "descriptionEn": "12-piece scratch resistant set, compatible with all stoves.", "price": 589, "stock": 17, "image": "https://picsum.photos/320/220?random=1308" },
                { "id": "p9", "category": "beauty", "nameAr": "مجموعة عناية بالبشرة 5 في 1", "nameEn": "5-in-1 Skincare Ritual", "descriptionAr": "روتين كامل للتنظيف، الترطيب، التفتيح، والتغذية.", "descriptionEn": "Complete cleanse, hydrate, brighten, and nourish routine.", "price": 449, "stock": 29, "image": "https://picsum.photos/320/220?random=1309" },
                { "id": "p10", "category": "beauty", "nameAr": "مجفف شعر أيوني برو", "nameEn": "Pro Ionic Hair Dryer", "descriptionAr": "تقنية أيونية، ثلاث درجات حرارة، وظيفة تبريد فوري.", "descriptionEn": "Ionic tech, three heat levels, instant cool shot.", "price": 309, "stock": 19, "image": "https://picsum.photos/320/220?random=1310" },
                { "id": "p11", "category": "gaming", "nameAr": "منصة ألعاب الجيل الجديد", "nameEn": "Next-Gen Gaming Console", "descriptionAr": "دعم 8K، مساحة 1 تيرابايت، وحدة تحكم تكيفية.", "descriptionEn": "8K support, 1TB storage, adaptive controller.", "price": 2599, "stock": 12, "image": "https://picsum.photos/320/220?random=1311", "badgeAr": "طلب مسبق", "badgeEn": "Pre-Order" },
                { "id": "p12", "category": "gaming", "nameAr": "كرسي ألعاب احترافي", "nameEn": "Pro Gaming Chair", "descriptionAr": "دعم فقرات أسفل الظهر، مساند قابلة للتعديل، جلد صناعي عالي الجودة.", "descriptionEn": "Lumbar support, adjustable armrests, premium PU leather.", "price": 1049, "stock": 18, "image": "https://picsum.photos/320/220?random=1312" },
                { "id": "p13", "category": "books", "nameAr": "دليل استراتيجيات الأعمال", "nameEn": "Business Strategy Handbook", "descriptionAr": "أحدث تقنيات النمو والتحول الرقمي للشركات الحديثة.", "descriptionEn": "Latest growth techniques and digital transformation insights.", "price": 159, "stock": 44, "image": "https://picsum.photos/320/220?random=1313" },
                { "id": "p14", "category": "books", "nameAr": "رواية خيال علمي مستقبلية", "nameEn": "Futuristic Sci-Fi Novel", "descriptionAr": "رحلة ملحمية عبر الحضارات الذكية والذكاء الاصطناعي.", "descriptionEn": "Epic journey through intelligent civilizations and AI.", "price": 99, "stock": 60, "image": "https://picsum.photos/320/220?random=1314" },
                { "id": "p15", "category": "sports", "nameAr": "ساعة اللياقة المتطورة", "nameEn": "Advanced Fitness Watch", "descriptionAr": "مراقبة شاملة للصحة، GPS مدمج، تقارير النوم.", "descriptionEn": "All-round health tracking, built-in GPS, sleep reports.", "price": 629, "stock": 31, "image": "https://picsum.photos/320/220?random=1315" },
                { "id": "p16", "category": "sports", "nameAr": "مجموعة تدريب منزلية", "nameEn": "Home Training Kit", "descriptionAr": "حبال مقاومة، أوزان، حصيرة تمرين، دليل تمارين رقمي.", "descriptionEn": "Resistance bands, dumbbells, yoga mat, digital plans.", "price": 369, "stock": 27, "image": "https://picsum.photos/320/220?random=1316" }
            ],
            "paymentLinks": [
                { "id": "pay1", "nameAr": "فيزا", "nameEn": "Visa", "url": "https://visa.com", "icon": "fab fa-cc-visa" },
                { "id": "pay2", "nameAr": "ماستركارد", "nameEn": "Mastercard", "url": "https://mastercard.com", "icon": "fab fa-cc-mastercard" },
                { "id": "pay3", "nameAr": "مدى", "nameEn": "Mada", "url": "https://mada.com.sa", "icon": "fas fa-credit-card" },
                { "id": "pay4", "nameAr": "آبل باي", "nameEn": "Apple Pay", "url": "https://apple.com/apple-pay", "icon": "fab fa-apple-pay" },
                { "id": "pay5", "nameAr": "باي بال", "nameEn": "PayPal", "url": "https://paypal.com", "icon": "fab fa-cc-paypal" }
            ],
            "shippingMethods": [
                { "id": "ship1", "nameAr": "شحن محلي سريع", "nameEn": "Express Local Shipping", "eta": "1-2 أيام", "etaEn": "1-2 days", "cost": 35, "active": true },
                { "id": "ship2", "nameAr": "شحن دولي", "nameEn": "International Shipping", "eta": "5-9 أيام", "etaEn": "5-9 days", "cost": 199, "active": true },
                { "id": "ship3", "nameAr": "استلام من الفرع", "nameEn": "Store Pickup", "eta": "في نفس اليوم", "etaEn": "Same day", "cost": 0, "active": true }
            ],
            "orders": [
                { "id": "OA-2035", "customerAr": "أحمد المنصور", "customerEn": "Ahmed Almansour", "items": 3, "total": 2189, "status": "pending" },
                { "id": "OA-2034", "customerAr": "Sarah Johnson", "customerEn": "Sarah Johnson", "items": 5, "total": 4299, "status": "processing" },
                { "id": "OA-2033", "customerAr": "منى الحارثي", "customerEn": "Mona Alharbi", "items": 2, "total": 739, "status": "completed" },
                { "id": "OA-2032", "customerAr": "عبدالله الشريف", "customerEn": "Abdullah Alshareef", "items": 4, "total": 1549, "status": "pending" }
            ],
            "marketingCampaigns": [
                { "id": "camp1", "nameAr": "حملة الربيع", "nameEn": "Spring Campaign", "channelAr": "البريد الإلكتروني", "channelEn": "Email", "status": "scheduled" },
                { "id": "camp2", "nameAr": "عرض الجمعة", "nameEn": "Friday Deal", "channelAr": "رسائل قصيرة", "channelEn": "SMS", "status": "running" }
            ],
            "teamMembers": [
                { "id": "tm1", "nameAr": "ليان الفهد", "nameEn": "Layan Alfahd", "roleAr": "مديرة المنتجات", "roleEn": "Product Manager", "permissions": ["products", "orders"] },
                { "id": "tm2", "nameAr": "Omar Blake", "nameEn": "Omar Blake", "roleAr": "دعم العملاء", "roleEn": "Support Lead", "permissions": ["orders", "support"] }
            ],
            "subscribers": JSON.parse(localStorage.getItem("oa_subscribers") || "[]")
        };

        const adminTabsDefinition = [
            { "id": "dashboardTab", "icon": "fas fa-chart-line", "labelAr": "لوحة التحكم", "labelEn": "Dashboard" },
            { "id": "productsTab", "icon": "fas fa-boxes", "labelAr": "المنتجات والمخزون", "labelEn": "Products & Inventory" },
            { "id": "categoriesTab", "icon": "fas fa-th-large", "labelAr": "الأقسام", "labelEn": "Categories" },
            { "id": "paymentsTab", "icon": "fas fa-credit-card", "labelAr": "الدفع والشحن", "labelEn": "Payments & Shipping" },
            { "id": "ordersTab", "icon": "fas fa-file-invoice", "labelAr": "طلبات العملاء", "labelEn": "Customer Orders" },
            { "id": "marketingTab", "icon": "fas fa-bullhorn", "labelAr": "التسويق الآلي", "labelEn": "Automations" },
            { "id": "teamTab", "icon": "fas fa-user-shield", "labelAr": "فريق العمل", "labelEn": "Team Access" },
            { "id": "settingsTab", "icon": "fas fa-sliders-h", "labelAr": "إعدادات المتجر", "labelEn": "Store Settings" },
            { "id": "subscribersTab", "icon": "fas fa-user-plus", "labelAr": "مشتركو البريد", "labelEn": "Email Subscribers" }
        ];

        function handleLink(event, targetId) {
            event.preventDefault();
            if (targetId) {
                const target = document.getElementById(targetId);
                if (target) {
                    target.scrollIntoView({ "behavior": "smooth", "block": "start" });
                }
            }
        }

        function toggleLanguage() {
            state.language = state.language === "ar" ? "en" : "ar";
            applyLanguage();
            renderProductsTable();
            renderOrdersTable();
            renderMarketingTable();
            renderTeamTable();
            renderSubscribersList();
            renderShippingList();
        }

        function applyLanguage() {
            const html = document.documentElement;
            if (state.language === "ar") {
                html.lang = "ar";
                html.dir = "rtl";
                document.body.classList.remove("lang-en");
                document.getElementById("languageToggle").textContent = "EN";
            } else {
                html.lang = "en";
                html.dir = "ltr";
                document.body.classList.add("lang-en");
                document.getElementById("languageToggle").textContent = "AR";
            }
            document.querySelectorAll("[data-ar]").forEach((element) => {
                const ar = element.getAttribute("data-ar");
                const en = element.getAttribute("data-en");
                if (state.language === "ar" && ar !== null) {
                    element.textContent = ar;
                }
                if (state.language === "en" && en !== null) {
                    element.textContent = en;
                }
            });
            document.querySelectorAll("[data-ar-placeholder]").forEach((element) => {
                const arPh = element.getAttribute("data-ar-placeholder");
                const enPh = element.getAttribute("data-en-placeholder");
                if (state.language === "ar" && arPh !== null) {
                    element.setAttribute("placeholder", arPh);
                }
                if (state.language === "en" && enPh !== null) {
                    element.setAttribute("placeholder", enPh);
                }
            });
            document.querySelectorAll("[data-price-sar]").forEach((element) => {
                const priceValue = parseFloat(element.getAttribute("data-price-sar"));
                if (!Number.isNaN(priceValue)) {
                    if (state.language === "ar") {
                        element.textContent = `${priceValue} ريال`;
                    } else {
                        element.textContent = `$${(priceValue * USD_RATE).toFixed(2)}`;
                    }
                }
            });
            document.querySelectorAll("[data-badge-ar]").forEach((element) => {
                const badgeAr = element.getAttribute("data-badge-ar");
                const badgeEn = element.getAttribute("data-badge-en");
                element.textContent = state.language === "ar" ? (badgeAr || "") : (badgeEn || badgeAr || "");
            });
            document.getElementById("storeNameHeading").textContent = state.storeName;
        }

        function renderCategoryNavigation() {
            const nav = document.getElementById("categoryNavigation");
            nav.innerHTML = "";
            state.categories.forEach((category) => {
                const button = document.createElement("button");
                button.className = "category-chip flex items-center space-x-3 space-x-reverse bg-white border border-slate-200 rounded-full px-5 py-3 text-sm font-semibold text-primary hover:border-accent hover:text-accent transition";
                button.onclick = (event) => {
                    event.preventDefault();
                    const target = document.getElementById(`category-${category.id}`);
                    if (target) {
                        target.scrollIntoView({ "behavior": "smooth", "block": "start" });
                    }
                };
                button.innerHTML = `
                    <span class="w-9 h-9 rounded-full flex items-center justify-center ${category.color}">
                        <i class="${category.icon}"></i>
                    </span>
                    <span data-ar="${category.nameAr}" data-en="${category.nameEn}">${state.language === "ar" ? category.nameAr : category.nameEn}</span>
                `;
                nav.appendChild(button);
            });
            applyLanguage();
        }

        function createProductCard(product, highlight = false) {
            const card = document.createElement("article");
            card.className = `product-card border ${highlight ? "border-accent" : "border-slate-200"} bg-white rounded-3xl overflow-hidden shadow-sm flex flex-col`;
            const imageSource = product.image || DEFAULT_PRODUCT_IMAGE;
            const badge = product.badgeAr ? `<span class="absolute top-4 ${document.documentElement.dir === "rtl" ? "left-4" : "right-4"} bg-accent text-white text-xs font-semibold px-3 py-1 rounded-full shadow" data-badge-ar="${product.badgeAr}" data-badge-en="${product.badgeEn || product.badgeAr}">${state.language === "ar" ? product.badgeAr : (product.badgeEn || product.badgeAr)}</span>` : "";
            card.innerHTML = `
                <div class="relative">
                    <img src="${imageSource}" alt="${product.nameEn} premium product display" loading="lazy" class="w-full h-48 object-cover">
                    ${badge}
                </div>
                <div class="p-6 flex-1 flex flex-col space-y-3">
                    <div>
                        <h4 class="text-lg font-semibold text-primary" data-ar="${product.nameAr}" data-en="${product.nameEn}">${state.language === "ar" ? product.nameAr : product.nameEn}</h4>
                        <p class="text-sm text-muted" data-ar="${product.descriptionAr}" data-en="${product.descriptionEn}">${state.language === "ar" ? product.descriptionAr : product.descriptionEn}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold text-primary" data-price-sar="${product.price}">${state.language === "ar" ? `${product.price} ريال` : `$${(product.price * USD_RATE).toFixed(2)}`}</span>
                        <span class="text-xs text-muted bg-slate-100 px-3 py-1 rounded-full" data-ar="المخزون: ${product.stock}" data-en="Stock: ${product.stock}">${state.language === "ar" ? `المخزون: ${product.stock}` : `Stock: ${product.stock}`}</span>
                    </div>
                    <button class="mt-auto bg-accent hover:bg-accent-light text-white font-semibold px-5 py-3 rounded-full transition flex items-center justify-center space-x-2 space-x-reverse" onclick="addToCart('${product.id}')">
                        <i class="fas fa-cart-plus"></i>
                        <span data-ar="أضف للسلة" data-en="Add to Cart">أضف للسلة</span>
                    </button>
                </div>
            `;
            return card;
        }

        function renderFeaturedProducts() {
            const grid = document.getElementById("featuredProductsGrid");
            grid.innerHTML = "";
            const picks = state.products.slice(0, 4);
            picks.forEach((product) => {
                grid.appendChild(createProductCard(product, true));
            });
            applyLanguage();
        }

        function renderCategoriesSections() {
            const wrapper = document.getElementById("categoriesSections");
            wrapper.innerHTML = "";
            state.categories.forEach((category) => {
                const section = document.createElement("section");
                section.id = `category-${category.id}`;
                section.className = "bg-white border border-slate-200 rounded-3xl p-8 shadow-sm";
                const categoryProducts = state.products.filter((product) => product.category === category.id);
                section.innerHTML = `
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-6 space-y-4 lg:space-y-0">
                        <div class="flex items-center space-x-4 space-x-reverse">
                            <div class="w-12 h-12 rounded-full ${category.color} flex items-center justify-center text-xl">
                                <i class="${category.icon}"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-primary" data-ar="${category.nameAr}" data-en="${category.nameEn}">${state.language === "ar" ? category.nameAr : category.nameEn}</h3>
                                <p class="text-xs text-muted" data-ar="مجموعة منتقاة من قسم ${category.nameAr}." data-en="Curated items from the ${category.nameEn} collection.">مجموعة منتقاة من قسم ${category.nameAr}.</p>
                            </div>
                        </div>
                        <span class="text-xs text-muted bg-slate-100 px-3 py-2 rounded-full">
                            <span data-ar="عدد المنتجات" data-en="Products">عدد المنتجات</span>: ${categoryProducts.length}
                        </span>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6" id="grid-${category.id}"></div>
                `;
                wrapper.appendChild(section);
                const grid = section.querySelector(`#grid-${category.id}`);
                categoryProducts.forEach((product) => grid.appendChild(createProductCard(product)));
            });
            applyLanguage();
        }

        function addToCart(productId) {
            const product = state.products.find((item) => item.id === productId);
            if (!product) {
                return;
            }
            const existing = state.cart.find((item) => item.id === productId);
            if (existing) {
                existing.quantity += 1;
            } else {
                state.cart.push({
                    "id": product.id,
                    "nameAr": product.nameAr,
                    "nameEn": product.nameEn,
                    "price": product.price,
                    "image": product.image || DEFAULT_PRODUCT_IMAGE,
                    "quantity": 1
                });
            }
            updateCartUI();
            showToast(state.language === "ar" ? "تمت إضافة المنتج للسلة" : "Product added to cart", "success");
        }

        function updateCartUI() {
            const countBadge = document.getElementById("miniCartCount");
            const cartList = document.getElementById("cartItemsContainer");
            const subtotalElement = document.getElementById("cartSubtotal");
            const taxElement = document.getElementById("cartTax");
            const totalElement = document.getElementById("cartTotal");
            const totalItems = state.cart.reduce((sum, item) => sum + item.quantity, 0);
            countBadge.textContent = totalItems;
            cartList.innerHTML = "";
            if (state.cart.length === 0) {
                const empty = document.createElement("div");
                empty.className = "text-center text-sm text-muted py-10";
                empty.setAttribute("data-ar", "سلتك فارغة، أضف منتجات للمتابعة.");
                empty.setAttribute("data-en", "Your cart is empty, add products to proceed.");
                empty.textContent = state.language === "ar" ? "سلتك فارغة، أضف منتجات للمتابعة." : "Your cart is empty, add products to proceed.";
                cartList.appendChild(empty);
            } else {
                state.cart.forEach((item) => {
                    const row = document.createElement("div");
                    row.className = "border border-slate-200 rounded-2xl p-4 flex items-center space-x-4 space-x-reverse";
                    row.innerHTML = `
                        <img src="${item.image}" alt="${item.nameEn} thumbnail" loading="lazy" class="w-16 h-16 rounded-xl object-cover border border-slate-200">
                        <div class="flex-1">
                            <h5 class="text-sm font-semibold text-primary" data-ar="${item.nameAr}" data-en="${item.nameEn}">${state.language === "ar" ? item.nameAr : item.nameEn}</h5>
                            <p class="text-xs text-muted" data-ar="الكمية" data-en="Quantity">الكمية</p>
                            <div class="flex items-center space-x-2 space-x-reverse mt-2">
                                <button class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center hover:bg-slate-100 transition" onclick="adjustCart('${item.id}', -1)">
                                    <i class="fas fa-minus text-xs"></i>
                                </button>
                                <span class="text-sm font-semibold w-8 text-center">${item.quantity}</span>
                                <button class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center hover:bg-slate-100 transition" onclick="adjustCart('${item.id}', 1)">
                                    <i class="fas fa-plus text-xs"></i>
                                </button>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-semibold text-primary" data-price-sar="${item.price}">${state.language === "ar" ? `${item.price} ريال` : `$${(item.price * USD_RATE).toFixed(2)}`}</p>
                            <button class="text-xs text-danger mt-3 hover:underline" data-ar="إزالة" data-en="Remove" onclick="removeFromCart('${item.id}')">${state.language === "ar" ? "إزالة" : "Remove"}</button>
                        </div>
                    `;
                    cartList.appendChild(row);
                });
            }
            const subtotal = state.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const tax = Math.round(subtotal * 0.15);
            const total = subtotal + tax;
            subtotalElement.textContent = state.language === "ar" ? `${subtotal} ريال` : `$${(subtotal * USD_RATE).toFixed(2)}`;
            taxElement.textContent = state.language === "ar" ? `${tax} ريال` : `$${(tax * USD_RATE).toFixed(2)}`;
            totalElement.textContent = state.language === "ar" ? `${total} ريال` : `$${(total * USD_RATE).toFixed(2)}`;
            applyLanguage();
        }

        function adjustCart(productId, delta) {
            const item = state.cart.find((cartItem) => cartItem.id === productId);
            if (!item) {
                return;
            }
            item.quantity += delta;
            if (item.quantity <= 0) {
                state.cart = state.cart.filter((cartItem) => cartItem.id !== productId);
            }
            updateCartUI();
        }

        function removeFromCart(productId) {
            state.cart = state.cart.filter((item) => item.id !== productId);
            updateCartUI();
        }

        function openCart() {
            document.getElementById("cartDrawer").classList.remove("hidden");
        }

        function closeCart() {
            document.getElementById("cartDrawer").classList.add("hidden");
        }

        function handleCheckoutNavigation() {
            if (state.cart.length === 0) {
                showToast(state.language === "ar" ? "سلة التسوق فارغة" : "Cart is empty", "warning");
                return;
            }
            const payload = {
                "items": state.cart,
                "orderEmail": state.orderEmail,
                "language": state.language,
                "subtotal": state.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0)
            };
            localStorage.setItem("oa_checkout_payload", JSON.stringify(payload));
            window.location.href = "<?php echo esc_url( home_url('/checkout/') ); ?>";
        }

        function renderHeroOrders() {
            const list = document.getElementById("heroOrdersList");
            list.innerHTML = "";
            const pending = state.orders.filter((order) => order.status === "pending").length;
            document.getElementById("heroPendingCount").textContent = pending;
            state.orders.slice(0, 4).forEach((order) => {
                const item = document.createElement("div");
                item.className = "flex items-center justify-between px-6 py-4";
                item.innerHTML = `
                    <div>
                        <p class="text-sm font-semibold text-primary">${order.id}</p>
                        <p class="text-xs text-muted" data-ar="${order.customerAr}" data-en="${order.customerEn}">${state.language === "ar" ? order.customerAr : order.customerEn}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-semibold text-primary" data-price-sar="${order.total}">${state.language === "ar" ? `${order.total} ريال` : `$${(order.total * USD_RATE).toFixed(2)}`}</p>
                        ${getStatusBadge(order.status)}
                    </div>
                `;
                list.appendChild(item);
            });
            applyLanguage();
        }

        function getStatusBadge(status) {
            let classes = "px-3 py-1 rounded-full text-xs font-semibold";
            let textAr = "غير معروف";
            let textEn = "Unknown";
            if (status === "pending") {
                classes += " bg-warning text-slate-900";
                textAr = "قيد الانتظار";
                textEn = "Pending";
            } else if (status === "processing") {
                classes += " bg-accent text-white";
                textAr = "قيد المعالجة";
                textEn = "Processing";
            } else if (status === "completed") {
                classes += " bg-success text-white";
                textAr = "مكتمل";
                textEn = "Completed";
            }
            return `<span class="${classes}" data-ar="${textAr}" data-en="${textEn}">${state.language === "ar" ? textAr : textEn}</span>`;
        }

        function renderPaymentHighlights() {
            const heroCount = document.getElementById("heroPaymentsCount");
            heroCount.textContent = state.paymentLinks.length;
            const highlightGrid = document.getElementById("paymentHighlightsGrid");
            const footerGrid = document.getElementById("footerPaymentGrid");
            highlightGrid.innerHTML = "";
            footerGrid.innerHTML = "";
            state.paymentLinks.forEach((link) => {
                const card = document.createElement("div");
                card.className = "border border-slate-200 rounded-2xl p-4 flex items-center space-x-4 space-x-reverse bg-white";
                card.innerHTML = `
                    <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-xl text-primary">
                        <i class="${link.icon}"></i>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-primary" data-ar="${link.nameAr}" data-en="${link.nameEn}">${state.language === "ar" ? link.nameAr : link.nameEn}</p>
                        <a href="#!" onclick="handleLink(event)" class="text-xs text-accent hover:text-accent-light transition">${link.url}</a>
                    </div>
                `;
                highlightGrid.appendChild(card);
                const footerItem = document.createElement("a");
                footerItem.href = "#!";
                footerItem.onclick = (event) => handleLink(event);
                footerItem.className = "flex items-center justify-center border border-white border-opacity-20 rounded-xl py-2 hover:bg-white hover:text-primary transition text-xs";
                footerItem.innerHTML = `
                    <i class="${link.icon} mx-1"></i>
                    <span data-ar="${link.nameAr}" data-en="${link.nameEn}">${state.language === "ar" ? link.nameAr : link.nameEn}</span>
                `;
                footerGrid.appendChild(footerItem);
            });
            applyLanguage();
        }

        function renderAdminTabs() {
            const nav = document.getElementById("adminTabsNav");
            const content = document.getElementById("adminTabsContent");
            nav.innerHTML = "";
            content.innerHTML = "";
            adminTabsDefinition.forEach((tab, index) => {
                const button = document.createElement("button");
                button.className = `w-full flex items-center justify-between px-4 py-3 rounded-xl transition ${index === 0 ? "bg-white shadow-sm text-primary" : "text-slate-600 hover:bg-white hover:shadow-sm"}`;
                button.setAttribute("data-target", tab.id);
                button.innerHTML = `
                    <div class="flex items-center space-x-3 space-x-reverse">
                        <i class="${tab.icon} text-accent"></i>
                        <span data-ar="${tab.labelAr}" data-en="${tab.labelEn}">${state.language === "ar" ? tab.labelAr : tab.labelEn}</span>
                    </div>
                    <i class="fas fa-chevron-left text-xs text-slate-400"></i>
                `;
                button.addEventListener("click", () => switchAdminTab(tab.id));
                nav.appendChild(button);
                const panel = document.createElement("section");
                panel.id = tab.id;
                panel.className = `${index === 0 ? "" : "hidden"} space-y-6`;
                content.appendChild(panel);
            });
            renderDashboardTab();
            renderProductsTab();
            renderCategoriesTab();
            renderPaymentsTab();
            renderOrdersTable();
            renderMarketingTab();
            renderTeamTab();
            renderSettingsTab();
            renderSubscribersTab();
            applyLanguage();
        }

        function switchAdminTab(targetId) {
            document.querySelectorAll("#adminTabsNav button").forEach((button) => {
                if (button.getAttribute("data-target") === targetId) {
                    button.classList.add("bg-white", "shadow-sm", "text-primary");
                    button.classList.remove("text-slate-600");
                } else {
                    button.classList.remove("bg-white", "shadow-sm", "text-primary");
                    button.classList.add("text-slate-600");
                }
            });
            document.querySelectorAll("#adminTabsContent > section").forEach((section) => {
                if (section.id === targetId) {
                    section.classList.remove("hidden");
                } else {
                    section.classList.add("hidden");
                }
            });
        }

        function renderDashboardTab() {
            const panel = document.getElementById("dashboardTab");
            panel.innerHTML = `
                <div>
                    <h3 class="text-xl font-bold text-primary" data-ar="ملخص الأداء" data-en="Performance Overview">ملخص الأداء</h3>
                    <p class="text-xs text-muted" data-ar="تتبع أهم مؤشرات المتجر لحظياً." data-en="Track your store key metrics in real-time.">تتبع أهم مؤشرات المتجر لحظياً.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5">
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm">
                        <p class="text-xs text-muted" data-ar="إجمالي المنتجات" data-en="Total Products">إجمالي المنتجات</p>
                        <p class="text-3xl font-extrabold text-primary mt-3">${state.products.length}</p>
                        <p class="text-xs text-success mt-2" data-ar="إضافة منتجات جديدة متاحة من تبويب المنتجات." data-en="Add new items from the products tab.">إضافة منتجات جديدة متاحة من تبويب المنتجات.</p>
                    </div>
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm">
                        <p class="text-xs text-muted" data-ar="أقسام فعالة" data-en="Active Categories">أقسام فعالة</p>
                        <p class="text-3xl font-extrabold text-primary mt-3">${state.categories.length}</p>
                        <p class="text-xs text-accent mt-2" data-ar="يمكن إعادة ترتيب الأقسام وإضافة أيقونات جديدة." data-en="Reorder categories and add icons anytime.">يمكن إعادة ترتيب الأقسام وإضافة أيقونات جديدة.</p>
                    </div>
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm">
                        <p class="text-xs text-muted" data-ar="وسائل الدفع" data-en="Payment Methods">وسائل الدفع</p>
                        <p class="text-3xl font-extrabold text-primary mt-3">${state.paymentLinks.length}</p>
                        <p class="text-xs text-warning mt-2" data-ar="أضف روابط دفع جديدة لتوسيع خيارات العملاء." data-en="Add new payment URLs to expand customer choice.">أضف روابط دفع جديدة لتوسيع خيارات العملاء.</p>
                    </div>
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm">
                        <p class="text-xs text-muted" data-ar="طلبات قيد المتابعة" data-en="Orders Pending">طلبات قيد المتابعة</p>
                        <p class="text-3xl font-extrabold text-primary mt-3">${state.orders.filter((order) => order.status === "pending").length}</p>
                        <p class="text-xs text-danger mt-2" data-ar="تابع حالة الطلبات أولا بأول لرفع رضا العملاء." data-en="Follow-up promptly to boost satisfaction.">تابع حالة الطلبات أولا بأول لرفع رضا العملاء.</p>
                    </div>
                </div>
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">
                    <h4 class="text-lg font-bold text-primary mb-4" data-ar="حالة المتجر والبنية التشغيلية" data-en="Store Status & Operations">حالة المتجر والبنية التشغيلية</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white border border-slate-200 rounded-xl p-4 flex items-center justify-between">
                            <div>
                                <p class="text-xs text-muted" data-ar="وضع المتجر" data-en="Store Mode">وضع المتجر</p>
                                <p class="text-sm font-semibold text-primary" id="storeOnlineStatus"></p>
                            </div>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" id="storeOnlineToggle" class="form-checkbox h-5 w-5 text-accent" ${state.storeOnline ? "checked" : ""}>
                                <span class="text-xs text-muted mr-2" data-ar="تشغيل / إيقاف" data-en="On / Off">تشغيل / إيقاف</span>
                            </label>
                        </div>
                        <div class="bg-white border border-slate-200 rounded-xl p-4 flex items-center justify-between">
                            <div>
                                <p class="text-xs text-muted" data-ar="عدد المشتركين" data-en="Subscribers Count">عدد المشتركين</p>
                                <p class="text-sm font-semibold text-primary">${state.subscribers.length}</p>
                            </div>
                            <a href="#!" onclick="handleLink(event, 'subscribersTab')" class="text-xs text-accent hover:text-accent-light" data-ar="إدارة المشتركين" data-en="Manage Subscribers">إدارة المشتركين</a>
                        </div>
                    </div>
                </div>
            `;
            document.getElementById("storeOnlineStatus").setAttribute("data-ar", state.storeOnline ? "المتجر مفعّل للعملاء" : "المتجر مغلق حالياً");
            document.getElementById("storeOnlineStatus").setAttribute("data-en", state.storeOnline ? "Store is live for customers" : "Store is currently offline");
            document.getElementById("storeOnlineStatus").textContent = state.language === "ar" ? (state.storeOnline ? "المتجر مفعّل للعملاء" : "المتجر مغلق حالياً") : (state.storeOnline ? "Store is live for customers" : "Store is currently offline");
            const toggle = document.getElementById("storeOnlineToggle");
            toggle.addEventListener("change", (event) => {
                state.storeOnline = event.target.checked;
                localStorage.setItem("oa_store_online", JSON.stringify(state.storeOnline));
                document.getElementById("storeOnlineStatus").textContent = state.language === "ar" ? (state.storeOnline ? "المتجر مفعّل للعملاء" : "المتجر مغلق حالياً") : (state.storeOnline ? "Store is live for customers" : "Store is currently offline");
                showToast(state.language === "ar" ? "تم تحديث حالة المتجر" : "Store status updated", "info");
            });
        }

        function renderProductsTab() {
            const panel = document.getElementById("productsTab");
            panel.innerHTML = `
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">
                    <h4 class="text-lg font-bold text-primary mb-4" data-ar="إضافة منتج جديد" data-en="Add New Product">إضافة منتج جديد</h4>
                    <form id="productForm" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="اسم المنتج (عربي)" data-en="Product Name (Arabic)">اسم المنتج (عربي)</label>
                            <input type="text" id="productNameAr" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="Product Name (English)" data-en="Product Name (English)">Product Name (English)</label>
                            <input type="text" id="productNameEn" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="الوصف (عربي)" data-en="Description (Arabic)">الوصف (عربي)</label>
                            <textarea id="productDescriptionAr" class="w-full border border-slate-200 rounded-xl px-4 py-3 h-24 focus:outline-none focus:ring-2 focus:ring-accent" required></textarea>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="Description (English)" data-en="Description (English)">Description (English)</label>
                            <textarea id="productDescriptionEn" class="w-full border border-slate-200 rounded-xl px-4 py-3 h-24 focus:outline-none focus:ring-2 focus:ring-accent" required></textarea>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="السعر (ريال)" data-en="Price (SAR)">السعر (ريال)</label>
                            <input type="number" id="productPrice" min="1" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="المخزون" data-en="Inventory">المخزون</label>
                            <input type="number" id="productStock" min="0" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="القسم" data-en="Category">القسم</label>
                            <select id="productCategory" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent"></select>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="رابط الصورة (اختياري)" data-en="Image URL (optional)">رابط الصورة (اختياري)</label>
                            <input type="url" id="productImage" placeholder="https://picsum.photos/320/220?random=999" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="شارة (عربي)" data-en="Badge (Arabic)">شارة (عربي)</label>
                            <input type="text" id="productBadgeAr" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" placeholder="جديد">
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="Badge (English)" data-en="Badge (English)">Badge (English)</label>
                            <input type="text" id="productBadgeEn" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" placeholder="New">
                        </div>
                        <div class="md:col-span-2 flex justify-end">
                            <button type="submit" class="bg-accent text-white font-semibold px-6 py-3 rounded-xl hover:bg-accent-light transition flex items-center space-x-2 space-x-reverse">
                                <i class="fas fa-plus"></i>
                                <span data-ar="إضافة المنتج" data-en="Add Product">إضافة المنتج</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div>
                    <h4 class="text-lg font-bold text-primary mb-3" data-ar="جميع المنتجات" data-en="All Products">جميع المنتجات</h4>
                    <div class="overflow-x-auto border border-slate-200 rounded-2xl">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-100">
                                <tr>
                                    <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-right" data-ar="المنتج" data-en="Product">المنتج</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-right" data-ar="القسم" data-en="Category">القسم</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-right" data-ar="السعر" data-en="Price">السعر</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-right" data-ar="المخزون" data-en="Stock">المخزون</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-center" data-ar="إجراءات" data-en="Actions">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody id="productsTableBody" class="bg-white divide-y divide-slate-100"></tbody>
                        </table>
                    </div>
                </div>
            `;
            populateCategoryOptions();
            document.getElementById("productForm").addEventListener("submit", (event) => {
                event.preventDefault();
                const newProduct = {
                    "id": `p${Date.now()}`,
                    "category": document.getElementById("productCategory").value,
                    "nameAr": document.getElementById("productNameAr").value.trim(),
                    "nameEn": document.getElementById("productNameEn").value.trim(),
                    "descriptionAr": document.getElementById("productDescriptionAr").value.trim(),
                    "descriptionEn": document.getElementById("productDescriptionEn").value.trim(),
                    "price": parseFloat(document.getElementById("productPrice").value),
                    "stock": parseInt(document.getElementById("productStock").value, 10),
                    "image": document.getElementById("productImage").value.trim() || DEFAULT_PRODUCT_IMAGE,
                    "badgeAr": document.getElementById("productBadgeAr").value.trim(),
                    "badgeEn": document.getElementById("productBadgeEn").value.trim()
                };
                state.products.unshift(newProduct);
                renderProductsTable();
                renderFeaturedProducts();
                renderCategoriesSections();
                renderDashboardTab();
                document.getElementById("productForm").reset();
                showToast(state.language === "ar" ? "تم إضافة المنتج بنجاح" : "Product added successfully", "success");
            });
            renderProductsTable();
        }

        function populateCategoryOptions() {
            const select = document.getElementById("productCategory");
            if (!select) {
                return;
            }
            select.innerHTML = "";
            state.categories.forEach((category) => {
                const option = document.createElement("option");
                option.value = category.id;
                option.textContent = state.language === "ar" ? category.nameAr : category.nameEn;
                select.appendChild(option);
            });
        }

        function renderProductsTable() {
            const tbody = document.getElementById("productsTableBody");
            if (!tbody) {
                return;
            }
            tbody.innerHTML = "";
            state.products.forEach((product) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td class="px-4 py-3 whitespace-nowrap">
                        <div class="flex items-center space-x-3 space-x-reverse">
                            <img src="${product.image || DEFAULT_PRODUCT_IMAGE}" alt="${product.nameEn} admin thumbnail" loading="lazy" class="w-12 h-12 object-cover rounded-xl border border-slate-200">
                            <div>
                                <p class="text-sm font-semibold text-primary" data-ar="${product.nameAr}" data-en="${product.nameEn}">${state.language === "ar" ? product.nameAr : product.nameEn}</p>
                                <p class="text-xs text-muted" data-ar="${product.descriptionAr}" data-en="${product.descriptionEn}">${state.language === "ar" ? product.descriptionAr : product.descriptionEn}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-xs text-muted" data-ar="${getCategoryName(product.category, "ar")}" data-en="${getCategoryName(product.category, "en")}">${state.language === "ar" ? getCategoryName(product.category, "ar") : getCategoryName(product.category, "en")}</td>
                    <td class="px-4 py-3 text-xs font-semibold text-primary" data-price-sar="${product.price}">${state.language === "ar" ? `${product.price} ريال` : `$${(product.price * USD_RATE).toFixed(2)}`}</td>
                    <td class="px-4 py-3 text-xs">
                        <span class="inline-flex items-center px-3 py-1 rounded-full ${product.stock > 10 ? "bg-success bg-opacity-10 text-success" : "bg-warning bg-opacity-10 text-warning"}">
                            ${product.stock}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <button class="text-xs text-danger hover:underline" data-ar="حذف" data-en="Delete" onclick="deleteProduct('${product.id}')">${state.language === "ar" ? "حذف" : "Delete"}</button>
                    </td>
                `;
                tbody.appendChild(row);
            });
            applyLanguage();
        }

        function deleteProduct(productId) {
            state.products = state.products.filter((product) => product.id !== productId);
            renderProductsTable();
            renderFeaturedProducts();
            renderCategoriesSections();
            renderDashboardTab();
            showToast(state.language === "ar" ? "تم حذف المنتج" : "Product removed", "danger");
        }

        function getCategoryName(categoryId, lang) {
            const category = state.categories.find((cat) => cat.id === categoryId);
            if (!category) {
                return "";
            }
            return lang === "ar" ? category.nameAr : category.nameEn;
        }

        function renderCategoriesTab() {
            const panel = document.getElementById("categoriesTab");
            panel.innerHTML = `
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white border border-slate-200 rounded-2xl p-6">
                        <h4 class="text-lg font-bold text-primary mb-4" data-ar="الأقسام الحالية" data-en="Current Categories">الأقسام الحالية</h4>
                        <div id="categoriesGrid" class="space-y-3 max-h-80 overflow-y-auto scrollbar-thin"></div>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">
                        <h4 class="text-lg font-bold text-primary mb-4" data-ar="إضافة قسم جديد" data-en="Add New Category">إضافة قسم جديد</h4>
                        <form id="categoryForm" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-xs font-semibold text-muted mb-1 block" data-ar="اسم القسم (عربي)" data-en="Category Name (Arabic)">اسم القسم (عربي)</label>
                                <input type="text" id="categoryNameAr" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-muted mb-1 block" data-ar="Category Name (English)" data-en="Category Name (English)">Category Name (English)</label>
                                <input type="text" id="categoryNameEn" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-muted mb-1 block" data-ar="أيقونة Font Awesome" data-en="Font Awesome Icon">أيقونة Font Awesome</label>
                                <input type="text" id="categoryIcon" placeholder="fas fa-laptop" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-muted mb-1 block" data-ar="كود اللون (Tailwind)" data-en="Tailwind Color Classes">كود اللون (Tailwind)</label>
                                <input type="text" id="categoryColor" placeholder="bg-blue-100 text-blue-600" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                            </div>
                            <div class="md:col-span-2 flex justify-end">
                                <button type="submit" class="bg-accent text-white font-semibold px-6 py-3 rounded-xl hover:bg-accent-light transition flex items-center space-x-2 space-x-reverse">
                                    <i class="fas fa-plus"></i>
                                    <span data-ar="إضافة القسم" data-en="Add Category">إضافة القسم</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            `;
            renderCategoriesGrid();
            document.getElementById("categoryForm").addEventListener("submit", (event) => {
                event.preventDefault();
                const newCategory = {
                    "id": `cat-${Date.now()}`,
                    "nameAr": document.getElementById("categoryNameAr").value.trim(),
                    "nameEn": document.getElementById("categoryNameEn").value.trim(),
                    "icon": document.getElementById("categoryIcon").value.trim(),
                    "color": document.getElementById("categoryColor").value.trim()
                };
                state.categories.push(newCategory);
                renderCategoriesGrid();
                renderCategoryNavigation();
                renderCategoriesSections();
                populateCategoryOptions();
                renderDashboardTab();
                document.getElementById("categoryForm").reset();
                showToast(state.language === "ar" ? "تم إضافة القسم" : "Category added", "success");
            });
        }

        function renderCategoriesGrid() {
            const grid = document.getElementById("categoriesGrid");
            if (!grid) {
                return;
            }
            grid.innerHTML = "";
            state.categories.forEach((category) => {
                const item = document.createElement("div");
                item.className = "flex items-center justify-between border border-slate-200 rounded-xl p-4 bg-white";
                item.innerHTML = `
                    <div class="flex items-center space-x-3 space-x-reverse">
                        <div class="w-10 h-10 rounded-full ${category.color} flex items-center justify-center text-lg">
                            <i class="${category.icon}"></i>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-primary" data-ar="${category.nameAr}" data-en="${category.nameEn}">${state.language === "ar" ? category.nameAr : category.nameEn}</p>
                            <p class="text-xs text-muted">${category.id}</p>
                        </div>
                    </div>
                    <button class="text-xs text-danger hover:underline" data-ar="حذف" data-en="Delete" onclick="deleteCategory('${category.id}')">${state.language === "ar" ? "حذف" : "Delete"}</button>
                `;
                grid.appendChild(item);
            });
            applyLanguage();
        }

        function deleteCategory(categoryId) {
            state.categories = state.categories.filter((category) => category.id !== categoryId);
            state.products = state.products.filter((product) => product.category !== categoryId);
            renderCategoriesGrid();
            renderCategoryNavigation();
            renderCategoriesSections();
            populateCategoryOptions();
            renderProductsTable();
            renderDashboardTab();
            showToast(state.language === "ar" ? "تم حذف القسم" : "Category removed", "danger");
        }

        function renderPaymentsTab() {
            const panel = document.getElementById("paymentsTab");
            panel.innerHTML = `
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white border border-slate-200 rounded-2xl p-6">
                        <h4 class="text-lg font-bold text-primary mb-4" data-ar="روابط الدفع الحالية" data-en="Current Payment Links">روابط الدفع الحالية</h4>
                        <div id="paymentLinksList" class="space-y-3 max-h-80 overflow-y-auto scrollbar-thin"></div>
                        <form id="paymentForm" class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 bg-slate-50 border border-slate-200 rounded-2xl p-4">
                            <div>
                                <label class="text-xs font-semibold text-muted mb-1 block" data-ar="اسم الوسيلة (عربي)" data-en="Method Name (Arabic)">اسم الوسيلة (عربي)</label>
                                <input type="text" id="paymentNameAr" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-muted mb-1 block" data-ar="Method Name (English)" data-en="Method Name (English)">Method Name (English)</label>
                                <input type="text" id="paymentNameEn" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-muted mb-1 block" data-ar="رابط الدفع" data-en="Payment URL">رابط الدفع</label>
                                <input type="url" id="paymentUrl" placeholder="https://payment.example.com" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-muted mb-1 block" data-ar="أيقونة Font Awesome" data-en="Font Awesome Icon">أيقونة Font Awesome</label>
                                <input type="text" id="paymentIcon" placeholder="fab fa-cc-visa" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                            </div>
                            <div class="md:col-span-2 flex justify-end">
                                <button type="submit" class="bg-accent text-white font-semibold px-6 py-3 rounded-xl hover:bg-accent-light transition flex items-center space-x-2 space-x-reverse">
                                    <i class="fas fa-link"></i>
                                    <span data-ar="حفظ الرابط" data-en="Save Link">حفظ الرابط</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="bg-white border border-slate-200 rounded-2xl p-6">
                        <h4 class="text-lg font-bold text-primary mb-4" data-ar="خيارات الشحن" data-en="Shipping Options">خيارات الشحن</h4>
                        <div id="shippingList" class="space-y-3"></div>
                    </div>
                </div>
            `;
            document.getElementById("paymentForm").addEventListener("submit", (event) => {
                event.preventDefault();
                const newLink = {
                    "id": `pay-${Date.now()}`,
                    "nameAr": document.getElementById("paymentNameAr").value.trim(),
                    "nameEn": document.getElementById("paymentNameEn").value.trim(),
                    "url": document.getElementById("paymentUrl").value.trim(),
                    "icon": document.getElementById("paymentIcon").value.trim()
                };
                state.paymentLinks.push(newLink);
                renderPaymentLinksList();
                renderPaymentHighlights();
                renderDashboardTab();
                document.getElementById("paymentForm").reset();
                showToast(state.language === "ar" ? "تم حفظ رابط الدفع" : "Payment link saved", "success");
            });
            renderPaymentLinksList();
            renderShippingList();
        }

        function renderPaymentLinksList() {
            const list = document.getElementById("paymentLinksList");
            if (!list) {
                return;
            }
            list.innerHTML = "";
            state.paymentLinks.forEach((link) => {
                const item = document.createElement("div");
                item.className = "flex items-center justify-between border border-slate-200 rounded-xl p-4 bg-white";
                item.innerHTML = `
                    <div class="flex items-center space-x-4 space-x-reverse">
                        <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-lg text-primary">
                            <i class="${link.icon}"></i>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-primary" data-ar="${link.nameAr}" data-en="${link.nameEn}">${state.language === "ar" ? link.nameAr : link.nameEn}</p>
                            <a href="#!" onclick="handleLink(event)" class="text-xs text-accent">${link.url}</a>
                        </div>
                    </div>
                    <button class="text-xs text-danger hover:underline" data-ar="حذف" data-en="Delete" onclick="deletePaymentLink('${link.id}')">${state.language === "ar" ? "حذف" : "Delete"}</button>
                `;
                list.appendChild(item);
            });
            applyLanguage();
        }

        function deletePaymentLink(paymentId) {
            state.paymentLinks = state.paymentLinks.filter((link) => link.id !== paymentId);
            renderPaymentLinksList();
            renderPaymentHighlights();
            renderDashboardTab();
            showToast(state.language === "ar" ? "تم حذف رابط الدفع" : "Payment link deleted", "danger");
        }

        function renderShippingList() {
            const container = document.getElementById("shippingList");
            if (!container) {
                return;
            }
            container.innerHTML = "";
            state.shippingMethods.forEach((method) => {
                const box = document.createElement("div");
                box.className = "border border-slate-200 rounded-xl p-4 flex items-center justify-between";
                box.innerHTML = `
                    <div>
                        <p class="text-sm font-semibold text-primary" data-ar="${method.nameAr}" data-en="${method.nameEn}">${state.language === "ar" ? method.nameAr : method.nameEn}</p>
                        <p class="text-xs text-muted" data-ar="المدة: ${method.eta}" data-en="ETA: ${method.etaEn}">${state.language === "ar" ? `المدة: ${method.eta}` : `ETA: ${method.etaEn}`}</p>
                        <p class="text-xs text-primary font-semibold" data-price-sar="${method.cost}">${state.language === "ar" ? `${method.cost} ريال` : `$${(method.cost * USD_RATE).toFixed(2)}`}</p>
                    </div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-accent" ${method.active ? "checked" : ""} onchange="toggleShipping('${method.id}', this.checked)">
                        <span class="text-xs text-muted mr-2" data-ar="مفعل" data-en="Active">${state.language === "ar" ? "مفعل" : "Active"}</span>
                    </label>
                `;
                container.appendChild(box);
            });
            applyLanguage();
        }

        function toggleShipping(methodId, status) {
            const method = state.shippingMethods.find((item) => item.id === methodId);
            if (method) {
                method.active = status;
                showToast(state.language === "ar" ? "تم تحديث حالة الشحن" : "Shipping status updated", "info");
            }
        }

        function renderOrdersTable() {
            const panel = document.getElementById("ordersTab");
            if (!panel) {
                return;
            }
            panel.innerHTML = `
                <h4 class="text-lg font-bold text-primary" data-ar="إدارة طلبات العملاء" data-en="Manage Customer Orders">إدارة طلبات العملاء</h4>
                <div class="overflow-x-auto border border-slate-200 rounded-2xl">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-right">#</th>
                                <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-right" data-ar="العميل" data-en="Customer">العميل</th>
                                <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-right" data-ar="العناصر" data-en="Items">العناصر</th>
                                <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-right" data-ar="الإجمالي" data-en="Total">الإجمالي</th>
                                <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-center" data-ar="الحالة" data-en="Status">الحالة</th>
                                <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-center" data-ar="إجراءات" data-en="Actions">إجراءات</th>
                            </tr>
                        </thead>
                        <tbody id="ordersTableBody" class="bg-white divide-y divide-slate-100"></tbody>
                    </table>
                </div>
            `;
            const tbody = document.getElementById("ordersTableBody");
            tbody.innerHTML = "";
            state.orders.forEach((order) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td class="px-4 py-3 text-sm font-semibold text-primary">${order.id}</td>
                    <td class="px-4 py-3 text-xs text-muted" data-ar="${order.customerAr}" data-en="${order.customerEn}">${state.language === "ar" ? order.customerAr : order.customerEn}</td>
                    <td class="px-4 py-3 text-xs text-primary font-semibold">${order.items}</td>
                    <td class="px-4 py-3 text-xs font-semibold text-primary" data-price-sar="${order.total}">${state.language === "ar" ? `${order.total} ريال` : `$${(order.total * USD_RATE).toFixed(2)}`}</td>
                    <td class="px-4 py-3 text-center">${getStatusBadge(order.status)}</td>
                    <td class="px-4 py-3 text-center">
                        <select class="border border-slate-200 rounded-full px-3 py-1 text-xs focus:outline-none focus:ring-1 focus:ring-accent" onchange="updateOrderStatus('${order.id}', this.value)">
                            <option value="pending" ${order.status === "pending" ? "selected" : ""} data-ar="قيد الانتظار" data-en="Pending">${state.language === "ar" ? "قيد الانتظار" : "Pending"}</option>
                            <option value="processing" ${order.status === "processing" ? "selected" : ""} data-ar="قيد المعالجة" data-en="Processing">${state.language === "ar" ? "قيد المعالجة" : "Processing"}</option>
                            <option value="completed" ${order.status === "completed" ? "selected" : ""} data-ar="مكتمل" data-en="Completed">${state.language === "ar" ? "مكتمل" : "Completed"}</option>
                        </select>
                    </td>
                `;
                tbody.appendChild(row);
            });
            applyLanguage();
        }

        function updateOrderStatus(orderId, status) {
            const order = state.orders.find((item) => item.id === orderId);
            if (order) {
                order.status = status;
                renderOrdersTable();
                renderHeroOrders();
                renderDashboardTab();
                showToast(state.language === "ar" ? "تم تحديث حالة الطلب" : "Order status updated", "success");
            }
        }

        function renderMarketingTab() {
            const panel = document.getElementById("marketingTab");
            panel.innerHTML = `
                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="text-lg font-bold text-primary" data-ar="حملات التسويق الآلي" data-en="Automated Campaigns">حملات التسويق الآلي</h4>
                            <p class="text-xs text-muted" data-ar="تفعيل حملات البريد والرسائل لمتابعة العملاء." data-en="Automate email and SMS campaigns for retention.">تفعيل حملات البريد والرسائل لمتابعة العملاء.</p>
                        </div>
                        <button id="createCampaignButton" class="px-4 py-2 rounded-full bg-accent text-white text-xs font-semibold hover:bg-accent-light transition">
                            <i class="fas fa-plus ml-2"></i>
                            <span data-ar="حملة جديدة" data-en="New Campaign">حملة جديدة</span>
                        </button>
                    </div>
                    <div class="overflow-x-auto border border-slate-200 rounded-2xl">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-100">
                                <tr>
                                    <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-right" data-ar="الحملة" data-en="Campaign">الحملة</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-right" data-ar="القناة" data-en="Channel">القناة</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-right" data-ar="الحالة" data-en="Status">الحالة</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-muted uppercase tracking-wider text-center" data-ar="إجراءات" data-en="Actions">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody id="marketingTableBody" class="bg-white divide-y divide-slate-100"></tbody>
                        </table>
                    </div>
                </div>
            `;
            renderMarketingTable();
            document.getElementById("createCampaignButton").addEventListener("click", () => {
                const newCampaign = {
                    "id": `camp-${Date.now()}`,
                    "nameAr": "حملة مخصصة",
                    "nameEn": "Custom Campaign",
                    "channelAr": "البريد الإلكتروني",
                    "channelEn": "Email",
                    "status": "draft"
                };
                state.marketingCampaigns.unshift(newCampaign);
                renderMarketingTable();
                showToast(state.language === "ar" ? "تم إنشاء حملة تجريبية" : "Sample campaign created", "info");
            });
        }

        function renderMarketingTable() {
            const tbody = document.getElementById("marketingTableBody");
            if (!tbody) {
                return;
            }
            tbody.innerHTML = "";
            state.marketingCampaigns.forEach((campaign) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td class="px-4 py-3 text-sm font-semibold text-primary" data-ar="${campaign.nameAr}" data-en="${campaign.nameEn}">${state.language === "ar" ? campaign.nameAr : campaign.nameEn}</td>
                    <td class="px-4 py-3 text-xs text-muted" data-ar="${campaign.channelAr}" data-en="${campaign.channelEn}">${state.language === "ar" ? campaign.channelAr : campaign.channelEn}</td>
                    <td class="px-4 py-3 text-xs">${getCampaignStatusBadge(campaign.status)}</td>
                    <td class="px-4 py-3 text-center">
                        <button class="text-xs text-danger hover:underline" data-ar="حذف" data-en="Delete" onclick="deleteCampaign('${campaign.id}')">${state.language === "ar" ? "حذف" : "Delete"}</button>
                    </td>
                `;
                tbody.appendChild(row);
            });
            applyLanguage();
        }

        function getCampaignStatusBadge(status) {
            let textAr = "مسودة";
            let textEn = "Draft";
            let classes = "px-3 py-1 rounded-full text-xs font-semibold bg-slate-200 text-slate-700";
            if (status === "running") {
                textAr = "نشط";
                textEn = "Running";
                classes = "px-3 py-1 rounded-full text-xs font-semibold bg-success bg-opacity-15 text-success";
            } else if (status === "scheduled") {
                textAr = "مجدول";
                textEn = "Scheduled";
                classes = "px-3 py-1 rounded-full text-xs font-semibold bg-warning bg-opacity-20 text-warning";
            }
            return `<span class="${classes}" data-ar="${textAr}" data-en="${textEn}">${state.language === "ar" ? textAr : textEn}</span>`;
        }

        function deleteCampaign(campaignId) {
            state.marketingCampaigns = state.marketingCampaigns.filter((campaign) => campaign.id !== campaignId);
            renderMarketingTable();
            showToast(state.language === "ar" ? "تم حذف الحملة" : "Campaign removed", "danger");
        }

        function renderTeamTab() {
            const panel = document.getElementById("teamTab");
            panel.innerHTML = `
                <div class="bg-white border border-slate-200 rounded-2xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="text-lg font-bold text-primary" data-ar="فريق العمل وصلاحيات الوصول" data-en="Team Roles & Access">فريق العمل وصلاحيات الوصول</h4>
                            <p class="text-xs text-muted" data-ar="أضف أعضاء للفريق وحدد صلاحياتهم في لوحة الإدارة." data-en="Add team members and assign admin permissions.">أضف أعضاء للفريق وحدد صلاحياتهم في لوحة الإدارة.</p>
                        </div>
                        <button id="addTeamMemberButton" class="px-4 py-2 rounded-full bg-accent text-white text-xs font-semibold hover:bg-accent-light transition">
                            <i class="fas fa-user-plus ml-2"></i>
                            <span data-ar="إضافة عضو" data-en="Add Member">إضافة عضو</span>
                        </button>
                    </div>
                    <div id="teamList" class="space-y-3"></div>
                </div>
            `;
            renderTeamTable();
            document.getElementById("addTeamMemberButton").addEventListener("click", () => {
                const newMember = {
                    "id": `tm-${Date.now()}`,
                    "nameAr": "عضو جديد",
                    "nameEn": "New Member",
                    "roleAr": "دور مخصص",
                    "roleEn": "Custom Role",
                    "permissions": ["products"]
                };
                state.teamMembers.push(newMember);
                renderTeamTable();
                showToast(state.language === "ar" ? "تمت إضافة عضو تجريبي" : "Sample member added", "info");
            });
        }

        function renderTeamTable() {
            const list = document.getElementById("teamList");
            if (!list) {
                return;
            }
            list.innerHTML = "";
            state.teamMembers.forEach((member) => {
                const card = document.createElement("div");
                card.className = "border border-slate-200 rounded-xl p-4 flex items-center justify-between";
                card.innerHTML = `
                    <div>
                        <p class="text-sm font-semibold text-primary" data-ar="${member.nameAr}" data-en="${member.nameEn}">${state.language === "ar" ? member.nameAr : member.nameEn}</p>
                        <p class="text-xs text-muted" data-ar="${member.roleAr}" data-en="${member.roleEn}">${state.language === "ar" ? member.roleAr : member.roleEn}</p>
                        <p class="text-xs text-primary mt-1">${member.permissions.join(", ")}</p>
                    </div>
                    <button class="text-xs text-danger hover:underline" data-ar="إزالة" data-en="Remove" onclick="removeTeamMember('${member.id}')">${state.language === "ar" ? "إزالة" : "Remove"}</button>
                `;
                list.appendChild(card);
            });
            applyLanguage();
        }

        function removeTeamMember(memberId) {
            state.teamMembers = state.teamMembers.filter((member) => member.id !== memberId);
            renderTeamTable();
            showToast(state.language === "ar" ? "تم إزالة العضو" : "Team member removed", "danger");
        }

        function renderSettingsTab() {
            const panel = document.getElementById("settingsTab");
            panel.innerHTML = `
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 space-y-6">
                    <div>
                        <h4 class="text-lg font-bold text-primary" data-ar="إعدادات المتجر المتقدمة" data-en="Advanced Store Settings">إعدادات المتجر المتقدمة</h4>
                        <p class="text-xs text-muted" data-ar="تحديث بيانات المتجر، البريد، الهاتف، وخيارات التخصيص." data-en="Update store information, email, phone, and customization options.">تحديث بيانات المتجر، البريد، الهاتف، وخيارات التخصيص.</p>
                    </div>
                    <form id="settingsForm" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="اسم المتجر" data-en="Store Name">اسم المتجر</label>
                            <input type="text" id="storeNameInput" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="البريد المخصص للطلبات" data-en="Orders Email">البريد المخصص للطلبات</label>
                            <input type="email" id="orderEmailInput" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="هاتف خدمة العملاء" data-en="Support Phone">هاتف خدمة العملاء</label>
                            <input type="text" id="supportPhoneInput" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="عنوان المتجر" data-en="Store Address">عنوان المتجر</label>
                            <input type="text" id="storeAddressInput" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                        </div>
                        <div class="md:col-span-2 flex justify-end space-x-3 space-x-reverse">
                            <button type="button" id="exportDataButton" class="px-5 py-3 rounded-xl border border-accent text-accent font-semibold hover:bg-accent hover:text-white transition flex items-center space-x-2 space-x-reverse">
                                <i class="fas fa-download"></i>
                                <span data-ar="تصدير بيانات المتجر" data-en="Export Store Data">تصدير بيانات المتجر</span>
                            </button>
                            <button type="submit" class="px-5 py-3 rounded-xl bg-accent text-white font-semibold hover:bg-accent-light transition flex items-center space-x-2 space-x-reverse">
                                <i class="fas fa-save"></i>
                                <span data-ar="حفظ الإعدادات" data-en="Save Settings">حفظ الإعدادات</span>
                            </button>
                        </div>
                    </form>
                </div>
            `;
            document.getElementById("storeNameInput").value = state.storeName;
            document.getElementById("orderEmailInput").value = state.orderEmail;
            document.getElementById("supportPhoneInput").value = state.supportPhone;
            document.getElementById("storeAddressInput").value = state.storeAddress;
            document.getElementById("settingsForm").addEventListener("submit", (event) => {
                event.preventDefault();
                state.storeName = document.getElementById("storeNameInput").value.trim();
                state.orderEmail = document.getElementById("orderEmailInput").value.trim();
                state.supportPhone = document.getElementById("supportPhoneInput").value.trim();
                state.storeAddress = document.getElementById("storeAddressInput").value.trim();
                localStorage.setItem("oa_store_name", state.storeName);
                localStorage.setItem("oa_order_email", state.orderEmail);
                localStorage.setItem("oa_support_phone", state.supportPhone);
                localStorage.setItem("oa_store_address", state.storeAddress);
                updateStoreInfoDisplays();
                showToast(state.language === "ar" ? "تم تحديث إعدادات المتجر" : "Store settings updated", "success");
            });
            document.getElementById("exportDataButton").addEventListener("click", exportStoreData);
        }

        function updateStoreInfoDisplays() {
            document.getElementById("storeNameHeading").textContent = state.storeName;
            document.getElementById("orderEmailDisplay").textContent = state.orderEmail;
            document.getElementById("footerEmailDisplay").textContent = state.orderEmail;
            document.getElementById("supportPhoneDisplay").textContent = state.supportPhone;
            document.getElementById("footerPhoneDisplay").textContent = state.supportPhone;
            document.getElementById("storeAddressDisplay").textContent = state.storeAddress;
            document.getElementById("footerAddressDisplay").textContent = state.storeAddress;
        }

        function exportStoreData() {
            const payload = {
                "store": {
                    "name": state.storeName,
                    "orderEmail": state.orderEmail,
                    "supportPhone": state.supportPhone,
                    "address": state.storeAddress,
                    "online": state.storeOnline
                },
                "categories": state.categories,
                "products": state.products,
                "paymentLinks": state.paymentLinks,
                "shippingMethods": state.shippingMethods,
                "orders": state.orders,
                "marketing": state.marketingCampaigns,
                "team": state.teamMembers,
                "subscribers": state.subscribers
            };
            const dataUri = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(payload, null, 2));
            const downloadLink = document.createElement("a");
            downloadLink.setAttribute("href", dataUri);
            downloadLink.setAttribute("download", "oa-premium-store-export.json");
            downloadLink.click();
            showToast(state.language === "ar" ? "تم تجهيز ملف التصدير" : "Export file prepared", "info");
        }

        function renderSubscribersTab() {
            const panel = document.getElementById("subscribersTab");
            panel.innerHTML = `
                <div class="bg-white border border-slate-200 rounded-2xl p-6 space-y-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-lg font-bold text-primary" data-ar="مشتركو البريد الإلكتروني" data-en="Newsletter Subscribers">مشتركو البريد الإلكتروني</h4>
                            <p class="text-xs text-muted" data-ar="تابع المشتركين، احذف أو صدّر بياناتهم." data-en="Track, remove, or export subscriber data.">تابع المشتركين، احذف أو صدّر بياناتهم.</p>
                        </div>
                        <button id="clearSubscribersButton" class="px-4 py-2 rounded-full border border-danger text-danger text-xs font-semibold hover:bg-danger hover:text-white transition">
                            <i class="fas fa-trash ml-2"></i>
                            <span data-ar="حذف الكل" data-en="Clear All">حذف الكل</span>
                        </button>
                    </div>
                    <div id="subscribersList" class="space-y-3 max-h-72 overflow-y-auto scrollbar-thin"></div>
                </div>
            `;
            document.getElementById("clearSubscribersButton").addEventListener("click", () => {
                state.subscribers = [];
                localStorage.setItem("oa_subscribers", JSON.stringify(state.subscribers));
                renderSubscribersList();
                renderDashboardTab();
                showToast(state.language === "ar" ? "تم حذف جميع المشتركين" : "All subscribers removed", "danger");
            });
            renderSubscribersList();
        }

        function renderSubscribersList() {
            const list = document.getElementById("subscribersList");
            if (!list) {
                return;
            }
            list.innerHTML = "";
            if (state.subscribers.length === 0) {
                const empty = document.createElement("p");
                empty.className = "text-xs text-muted";
                empty.setAttribute("data-ar", "لم يتم إضافة مشتركين بعد.");
                empty.setAttribute("data-en", "No subscribers yet.");
                empty.textContent = state.language === "ar" ? "لم يتم إضافة مشتركين بعد." : "No subscribers yet.";
                list.appendChild(empty);
            } else {
                state.subscribers.forEach((subscriber) => {
                    const item = document.createElement("div");
                    item.className = "flex items-center justify-between border border-slate-200 rounded-xl px-4 py-3";
                    item.innerHTML = `
                        <div>
                            <p class="text-sm font-semibold text-primary">${subscriber.email}</p>
                            <p class="text-xs text-muted" data-ar="تاريخ الاشتراك: ${subscriber.date}" data-en="Subscribed: ${subscriber.date}">${state.language === "ar" ? `تاريخ الاشتراك: ${subscriber.date}` : `Subscribed: ${subscriber.date}`}</p>
                        </div>
                        <button class="text-xs text-danger hover:underline" data-ar="إزالة" data-en="Remove" onclick="removeSubscriber('${subscriber.email}')">${state.language === "ar" ? "إزالة" : "Remove"}</button>
                    `;
                    list.appendChild(item);
                });
            }
            localStorage.setItem("oa_subscribers", JSON.stringify(state.subscribers));
            applyLanguage();
        }

        function removeSubscriber(email) {
            state.subscribers = state.subscribers.filter((subscriber) => subscriber.email !== email);
            localStorage.setItem("oa_subscribers", JSON.stringify(state.subscribers));
            renderSubscribersList();
            renderDashboardTab();
            showToast(state.language === "ar" ? "تم إزالة المشترك" : "Subscriber removed", "danger");
        }

        function handleNewsletterSubmit(event) {
            event.preventDefault();
            const emailField = document.getElementById("newsletterEmail");
            const email = emailField.value.trim();
            if (email.length === 0) {
                return;
            }
            if (state.subscribers.some((subscriber) => subscriber.email === email)) {
                showToast(state.language === "ar" ? "البريد مسجل مسبقاً" : "Email already subscribed", "warning");
                return;
            }
            const date = new Date();
            const formatted = `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, "0")}-${String(date.getDate()).padStart(2, "0")}`;
            state.subscribers.push({ "email": email, "date": formatted });
            localStorage.setItem("oa_subscribers", JSON.stringify(state.subscribers));
            renderSubscribersList();
            renderDashboardTab();
            emailField.value = "";
            showToast(state.language === "ar" ? "تم الاشتراك في النشرة" : "Subscribed to newsletter", "success");
        }

        function handleGlobalSearch(event) {
            if (event) {
                event.preventDefault();
            }
            const query = document.getElementById("globalSearchInput").value.trim().toLowerCase();
            const container = document.getElementById("searchResultsSection");
            const grid = document.getElementById("searchResultsGrid");
            if (query.length === 0) {
                container.classList.add("hidden");
                return;
            }
            const results = state.products.filter((product) => {
                return product.nameAr.toLowerCase().includes(query) || product.nameEn.toLowerCase().includes(query) || product.descriptionAr.toLowerCase().includes(query) || product.descriptionEn.toLowerCase().includes(query);
            });
            grid.innerHTML = "";
            if (results.length === 0) {
                const empty = document.createElement("p");
                empty.className = "text-sm text-muted";
                empty.setAttribute("data-ar", "لا توجد نتائج مطابقة.");
                empty.setAttribute("data-en", "No matching results.");
                empty.textContent = state.language === "ar" ? "لا توجد نتائج مطابقة." : "No matching results.";
                grid.appendChild(empty);
            } else {
                results.forEach((product) => {
                    grid.appendChild(createProductCard(product));
                });
            }
            container.classList.remove("hidden");
            applyLanguage();
        }

        function showToast(message, type) {
            const toast = document.createElement("div");
            toast.className = `fixed bottom-6 ${document.documentElement.dir === "rtl" ? "left-6" : "right-6"} z-50 px-5 py-3 rounded-xl text-white shadow-2xl flex items-center space-x-3 space-x-reverse`;
            let icon = "fa-info-circle";
            let bg = "bg-accent";
            if (type === "success") {
                icon = "fa-check-circle";
                bg = "bg-success";
            } else if (type === "danger") {
                icon = "fa-times-circle";
                bg = "bg-danger";
            } else if (type === "warning") {
                icon = "fa-exclamation-circle";
                bg = "bg-warning text-slate-900";
            } else if (type === "info") {
                icon = "fa-info-circle";
                bg = "bg-accent";
            }
            toast.classList.add(...bg.split(" "));
            toast.innerHTML = `
                <i class="fas ${icon}"></i>
                <span class="text-sm font-semibold">${message}</span>
            `;
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 3600);
        }

        function initializeCookieBanner() {
            if (!localStorage.getItem("oa_cookie_consent")) {
                document.getElementById("cookieBanner").classList.remove("hidden");
            }
        }

        function acceptCookies() {
            localStorage.setItem("oa_cookie_consent", "accepted");
            document.getElementById("cookieBanner").classList.add("hidden");
            showToast(state.language === "ar" ? "شكراً لموافقتك" : "Thanks for accepting", "success");
        }

        function initializeEventListeners() {
            document.getElementById("languageToggle").addEventListener("click", toggleLanguage);
            document.getElementById("openCartButton").addEventListener("click", openCart);
            document.getElementById("closeCartButton").addEventListener("click", closeCart);
            document.getElementById("cartBackdrop").addEventListener("click", closeCart);
            document.getElementById("adminToggle").addEventListener("click", () => document.getElementById("adminCenter").classList.remove("hidden"));
            document.getElementById("closeAdminButton").addEventListener("click", () => document.getElementById("adminCenter").classList.add("hidden"));
            document.getElementById("adminBackdrop").addEventListener("click", () => document.getElementById("adminCenter").classList.add("hidden"));
            document.getElementById("checkoutTrigger").addEventListener("click", handleCheckoutNavigation);
            document.getElementById("globalSearchForm").addEventListener("submit", handleGlobalSearch);
            document.getElementById("globalSearchInput").addEventListener("keydown", (event) => {
                if (event.key === "Escape") {
                    document.getElementById("searchResultsSection").classList.add("hidden");
                }
            });
            document.getElementById("closeSearchResults").addEventListener("click", () => document.getElementById("searchResultsSection").classList.add("hidden"));
            document.getElementById("newsletterForm").addEventListener("submit", handleNewsletterSubmit);
            document.getElementById("contactForm").addEventListener("submit", (event) => {
                event.preventDefault();
                showToast(state.language === "ar" ? "تم استلام رسالتك وسنعاود الاتصال قريباً." : "Message received, we will contact you soon.", "success");
                event.target.reset();
            });
            document.getElementById("acceptCookiesButton").addEventListener("click", acceptCookies);
            document.addEventListener("keydown", (event) => {
                if (event.ctrlKey && event.key.toLowerCase() === "k") {
                    event.preventDefault();
                    document.getElementById("globalSearchInput").focus();
                }
            });
        }

        function initializeStore() {
            renderCategoryNavigation();
            renderFeaturedProducts();
            renderCategoriesSections();
            renderHeroOrders();
            renderPaymentHighlights();
            renderAdminTabs();
            updateStoreInfoDisplays();
            applyLanguage();
            updateCartUI();
            initializeCookieBanner();
            initializeEventListeners();
        }

        window.addEventListener("DOMContentLoaded", initializeStore);
    </script>

<?php wp_footer(); ?>
</body>
</html>
