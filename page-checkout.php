<?php
/*
Template Name: Checkout Page
*/
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-ar="متجر OA بريميوم - صفحة الدفع" data-en="OA Premium Store - Checkout">متجر OA بريميوم - صفحة الدفع</title>
    <meta name="description" content="صفحة الدفع المتقدمة لمتجر OA بريميوم مع مزامنة سلة التسوق وإرسال الطلب مباشرة للبريد الإلكتروني.">
    <meta property="og:title" content="متجر OA بريميوم - إتمام الطلب">
    <meta property="og:description" content="أكمل طلبك في متجر OA بريميوم، استعرض تفاصيل السلة وأرسل الطلب إلى البريد المخصص بمجرد الضغط على زر الإرسال.">
    <meta property="og:image" content="https://picsum.photos/1200/630?random=1210">
    <link rel="icon" type="image/png" href="https://picsum.photos/64?random=1211">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#0f172a",
                        "accent": "#2563eb",
                        "accent-light": "#3b82f6",
                        "muted": "#64748b",
                        "success": "#22c55e"
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
        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 35px -18px rgba(15, 23, 42, 0.3);
        }
    </style>

<?php wp_head(); ?>
</head>
<body class="bg-slate-50 text-slate-900">
    <div class="max-w-6xl mx-auto px-4 py-10">
        <header class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-10">
            <div class="flex items-center space-x-4 space-x-reverse">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-accent to-primary text-white flex items-center justify-center text-xl">
                    <i class="fas fa-shield-check"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-extrabold text-primary" data-ar="متجر OA بريميوم" data-en="OA Premium Store">متجر OA بريميوم</h1>
                    <p class="text-xs text-muted" data-ar="صفحة دفع آمنة ومترجمة بالكامل" data-en="Secure, fully translated checkout">صفحة دفع آمنة ومترجمة بالكامل</p>
                </div>
            </div>
            <div class="flex items-center space-x-3 space-x-reverse">
                <button id="languageToggle" class="px-4 py-2 rounded-full bg-white border border-slate-200 text-primary font-semibold hover:bg-slate-100 transition">
                    EN
                </button>
                <a href="<?php echo esc_url( home_url('/' ) ); ?>" class="px-4 py-2 rounded-full border border-accent text-accent font-semibold hover:bg-accent hover:text-white transition" onclick="event.preventDefault(); window.location.href='<?php echo esc_url( home_url('/' ) ); ?>';">
                    <i class="fas fa-arrow-right ml-2"></i>
                    <span data-ar="العودة للمتجر" data-en="Return to Store">العودة للمتجر</span>
                </a>
            </div>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <section class="card bg-white border border-slate-200 rounded-3xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl font-bold text-primary" data-ar="ملخص السلة" data-en="Cart Summary">ملخص السلة</h2>
                            <p class="text-xs text-muted" data-ar="تحقق من المنتجات والكميات قبل إرسال الطلب." data-en="Verify products and quantities before sending.">تحقق من المنتجات والكميات قبل إرسال الطلب.</p>
                        </div>
                    </div>
                    <div id="cartItemsList" class="space-y-4 mt-6"></div>
                    <div class="mt-6 bg-slate-50 border border-slate-200 rounded-2xl p-4 space-y-3">
                        <div class="flex items-center justify-between text-xs text-muted">
                            <span data-ar="المجموع الفرعي" data-en="Subtotal">المجموع الفرعي</span>
                            <span id="summarySubtotal">0 ريال</span>
                        </div>
                        <div class="flex items-center justify-between text-xs text-muted">
                            <span data-ar="الضريبة (15%)" data-en="Tax (15%)">الضريبة (15%)</span>
                            <span id="summaryTax">0 ريال</span>
                        </div>
                        <div class="flex items-center justify-between text-lg font-bold text-primary">
                            <span data-ar="الإجمالي المستحق" data-en="Total Due">الإجمالي المستحق</span>
                            <span id="summaryTotal">0 ريال</span>
                        </div>
                    </div>
                </section>

                <section class="card bg-white border border-slate-200 rounded-3xl p-6">
                    <h2 class="text-xl font-bold text-primary mb-4" data-ar="معلومات العميل" data-en="Customer Information">معلومات العميل</h2>
                    <form id="checkoutForm" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="الاسم الكامل" data-en="Full Name">الاسم الكامل</label>
                            <input type="text" id="customerName" data-ar-placeholder="اكتب اسمك الكامل" data-en-placeholder="Enter your full name" placeholder="اكتب اسمك الكامل" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="البريد الإلكتروني" data-en="Email Address">البريد الإلكتروني</label>
                            <input type="email" id="customerEmail" data-ar-placeholder="example@email.com" data-en-placeholder="example@email.com" placeholder="example@email.com" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent" required>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="رقم الجوال" data-en="Phone Number">رقم الجوال</label>
                            <input type="tel" id="customerPhone" data-ar-placeholder="+966" data-en-placeholder="+966" placeholder="+966" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="المدينة" data-en="City">المدينة</label>
                            <input type="text" id="customerCity" data-ar-placeholder="الرياض" data-en-placeholder="Riyadh" placeholder="الرياض" class="w-full border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">
                        </div>
                        <div class="md:col-span-2">
                            <label class="text-xs font-semibold text-muted mb-1 block" data-ar="عنوان الشحن" data-en="Shipping Address">عنوان الشحن</label>
                            <textarea id="customerAddress" data-ar-placeholder="الحي، الشارع، رقم المنزل" data-en-placeholder="District, Street, House Number" placeholder="الحي، الشارع، رقم المنزل" class="w-full border border-slate-200 rounded-xl px-4 py-3 h-28 focus:outline-none focus:ring-2 focus:ring-accent"></textarea>
                        </div>
                    </form>
                </section>
            </div>

            <aside class="space-y-6">
                <section class="card bg-white border border-slate-200 rounded-3xl p-6">
                    <h2 class="text-xl font-bold text-primary mb-4" data-ar="التأكيد قبل الإرسال" data-en="Pre-send Verification">التأكيد قبل الإرسال</h2>
                    <div class="space-y-4 text-xs text-muted">
                        <div class="flex items-center space-x-3 space-x-reverse">
                            <i class="fas fa-envelope text-accent"></i>
                            <p data-ar="سيتم تجهيز بريد إلكتروني تلقائي بتفاصيل الطلب وإرساله للبريد المخصص." data-en="An automatic email with order details will be prepared for your dedicated mailbox.">سيتم تجهيز بريد إلكتروني تلقائي بتفاصيل الطلب وإرساله للبريد المخصص.</p>
                        </div>
                        <div class="flex items-center space-x-3 space-x-reverse">
                            <i class="fas fa-edit text-success"></i>
                            <p data-ar="يمكنك التعديل على نص البريد قبل الإرسال في برنامج البريد." data-en="You can edit the email text before sending in your mail client.">يمكنك التعديل على نص البريد قبل الإرسال في برنامج البريد.</p>
                        </div>
                        <div class="flex items-center space-x-3 space-x-reverse">
                            <i class="fas fa-lock text-primary"></i>
                            <p data-ar="لا يتم حفظ بياناتك على الخادم، كل العمليات تتم محلياً." data-en="Your data is not stored on a server; everything happens locally.">لا يتم حفظ بياناتك على الخادم، كل العمليات تتم محلياً.</p>
                        </div>
                    </div>
                </section>
                <section class="bg-gradient-to-br from-primary via-secondary to-primary text-white rounded-3xl p-6 shadow-2xl">
                    <h2 class="text-xl font-bold mb-3" data-ar="إرسال الطلب للبريد" data-en="Send Order to Email">إرسال الطلب للبريد</h2>
                    <p class="text-xs text-white text-opacity-80 mb-6" data-ar="بمجرد الضغط على الزر أدناه سيتم فتح البريد الإلكتروني لديك بنموذج الطلب الجاهز للإرسال." data-en="Clicking the button below opens your email client with the order ready to send.">بمجرد الضغط على الزر أدناه سيتم فتح البريد الإلكتروني لديك بنموذج الطلب الجاهز للإرسال.</p>
                    <button id="sendOrderButton" class="w-full bg-white text-primary font-semibold py-3 rounded-xl hover:bg-slate-100 transition flex items-center justify-center space-x-2 space-x-reverse">
                        <i class="fas fa-paper-plane"></i>
                        <span data-ar="إرسال الطلب الآن" data-en="Send Order Now">إرسال الطلب الآن</span>
                    </button>
                    <p class="text-[11px] text-white text-opacity-60 mt-4" data-ar="تأكد من مراجعة البريد قبل الإرسال النهائي لضمان دقة البيانات." data-en="Review the email before final send to ensure accuracy.">تأكد من مراجعة البريد قبل الإرسال النهائي لضمان دقة البيانات.</p>
                </section>
            </aside>
        </div>
    </div>

    <script>
        const USD_RATE = 0.27;
        const state = {
            "language": "ar",
            "checkout": null
        };

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
                if (state.language === "ar") {
                    element.textContent = element.getAttribute("data-ar");
                } else {
                    element.textContent = element.getAttribute("data-en");
                }
            });
            document.querySelectorAll("[data-ar-placeholder]").forEach((element) => {
                if (state.language === "ar") {
                    element.setAttribute("placeholder", element.getAttribute("data-ar-placeholder"));
                } else {
                    element.setAttribute("placeholder", element.getAttribute("data-en-placeholder"));
                }
            });
            document.querySelectorAll("[data-price-sar]").forEach((element) => {
                const value = parseFloat(element.getAttribute("data-price-sar"));
                if (!Number.isNaN(value)) {
                    element.textContent = state.language === "ar" ? `${value} ريال` : `$${(value * USD_RATE).toFixed(2)}`;
                }
            });
        }

        function toggleLanguage() {
            state.language = state.language === "ar" ? "en" : "ar";
            applyLanguage();
            renderCartItems();
        }

        function loadCheckoutData() {
            const stored = localStorage.getItem("oa_checkout_payload");
            if (!stored) {
                state.checkout = null;
                document.getElementById("cartItemsList").innerHTML = `
                    <p class="text-sm text-danger" data-ar="لا توجد بيانات للسلة. الرجاء العودة للمتجر." data-en="No cart data found. Please return to the store.">${state.language === "ar" ? "لا توجد بيانات للسلة. الرجاء العودة للمتجر." : "No cart data found. Please return to the store."}</p>
                `;
                applyLanguage();
                return;
            }
            state.checkout = JSON.parse(stored);
            if (state.checkout.language === "en") {
                state.language = "en";
            }
            renderCartItems();
        }

        function renderCartItems() {
            const container = document.getElementById("cartItemsList");
            container.innerHTML = "";
            if (!state.checkout || state.checkout.items.length === 0) {
                container.innerHTML = `
                    <p class="text-sm text-muted" data-ar="السلة فارغة، يرجى العودة وإضافة منتجات." data-en="Cart is empty, please return and add items.">${state.language === "ar" ? "السلة فارغة، يرجى العودة وإضافة منتجات." : "Cart is empty, please return and add items."}</p>
                `;
                applyLanguage();
                return;
            }
            state.checkout.items.forEach((item) => {
                const card = document.createElement("div");
                card.className = "border border-slate-200 rounded-2xl p-4 flex items-center space-x-4 space-x-reverse";
                card.innerHTML = `
                    <img src="${item.image}" alt="${item.nameEn} checkout item thumbnail" loading="lazy" class="w-16 h-16 rounded-xl object-cover border border-slate-200">
                    <div class="flex-1">
                        <h3 class="text-sm font-semibold text-primary" data-ar="${item.nameAr}" data-en="${item.nameEn}">${state.language === "ar" ? item.nameAr : item.nameEn}</h3>
                        <p class="text-xs text-muted" data-ar="الكمية: ${item.quantity}" data-en="Quantity: ${item.quantity}">${state.language === "ar" ? `الكمية: ${item.quantity}` : `Quantity: ${item.quantity}`}</p>
                    </div>
                    <div class="text-sm font-semibold text-primary" data-price-sar="${item.price * item.quantity}">${state.language === "ar" ? `${item.price * item.quantity} ريال` : `$${((item.price * item.quantity) * USD_RATE).toFixed(2)}`}</div>
                `;
                container.appendChild(card);
            });
            const subtotal = state.checkout.subtotal;
            const tax = Math.round(subtotal * 0.15);
            const total = subtotal + tax;
            document.getElementById("summarySubtotal").setAttribute("data-price-sar", subtotal);
            document.getElementById("summaryTax").setAttribute("data-price-sar", tax);
            document.getElementById("summaryTotal").setAttribute("data-price-sar", total);
            applyLanguage();
        }

        function handleSendOrder() {
            if (!state.checkout || state.checkout.items.length === 0) {
                alert(state.language === "ar" ? "لا توجد بيانات للطلب." : "No order data available.");
                return;
            }
            const name = document.getElementById("customerName").value.trim();
            const email = document.getElementById("customerEmail").value.trim();
            const phone = document.getElementById("customerPhone").value.trim();
            const city = document.getElementById("customerCity").value.trim();
            const address = document.getElementById("customerAddress").value.trim();
            if (name.length === 0 || email.length === 0) {
                alert(state.language === "ar" ? "يرجى تعبئة الاسم والبريد الإلكتروني." : "Please fill in name and email.");
                return;
            }
            const lines = state.checkout.items.map((item, index) => {
                const priceText = state.language === "ar" ? `${item.price * item.quantity} ريال` : `$${((item.price * item.quantity) * USD_RATE).toFixed(2)}`;
                return `${index + 1}. ${state.language === "ar" ? item.nameAr : item.nameEn} × ${item.quantity} = ${priceText}`;
            }).join("\n");
            const subtotal = state.checkout.subtotal;
            const tax = Math.round(subtotal * 0.15);
            const total = subtotal + tax;
            const summaryLines = [
                state.language === "ar" ? "تفاصيل الطلب:" : "Order Details:",
                lines,
                "",
                state.language === "ar" ? `المجموع الفرعي: ${subtotal} ريال` : `Subtotal: $${(subtotal * USD_RATE).toFixed(2)}`,
                state.language === "ar" ? `الضريبة (15%): ${tax} ريال` : `Tax (15%): $${(tax * USD_RATE).toFixed(2)}`,
                state.language === "ar" ? `الإجمالي المستحق: ${total} ريال` : `Total Due: $${(total * USD_RATE).toFixed(2)}`,
                "",
                state.language === "ar" ? "بيانات العميل:" : "Customer Information:",
                `${state.language === "ar" ? "الاسم" : "Name"}: ${name}`,
                `${state.language === "ar" ? "البريد الإلكتروني" : "Email"}: ${email}`,
                `${state.language === "ar" ? "رقم الجوال" : "Phone"}: ${phone || "-"}`,
                `${state.language === "ar" ? "المدينة" : "City"}: ${city || "-"}`,
                `${state.language === "ar" ? "العنوان" : "Address"}: ${address || "-"}`,
                "",
                state.language === "ar" ? "تم إنشاء الطلب من صفحة الدفع لمتجر OA بريميوم." : "Order generated from OA Premium Store checkout page."
            ];
            const subject = state.language === "ar" ? `طلب جديد من ${name}` : `New Order from ${name}`;
            const mailto = `mailto:${state.checkout.orderEmail}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(summaryLines.join("\n"))}`;
            window.location.href = mailto;
        }

        function initializeCheckoutPage() {
            document.getElementById("languageToggle").addEventListener("click", toggleLanguage);
            document.getElementById("sendOrderButton").addEventListener("click", handleSendOrder);
            loadCheckoutData();
            applyLanguage();
        }

        window.addEventListener("DOMContentLoaded", initializeCheckoutPage);
    </script>

<?php wp_footer(); ?>
</body>
</html>
