<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طراحی صفحه</title>
        {{ $header ?? '' }} <!-- اینجا هدر از بیرون به کامپوننت ارسال می‌شود -->

    <script src="https://cdn.tailwindcss.com"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.0/fabric.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-900">
        <!-- Header -->

	<header class="">
		<div class="bg-gray-300 mb-2 shadow-lg z-4 p-1 rounded-lg shadow flex justify-between items-center">
            <div class="flex items-center gap-4">
                <img src="./inc/svg/logo.svg" alt="لوگو" class="mr-20 h-8">

				<button class="w-10 h-8 bg-white flex flex-col justify-between items-center p-2 border-gray-500 rounded-lg">
    				<span class="w-6 h-1 bg-orange-500 rounded"></span>
    				<span class="w-6 h-1 bg-orange-500 rounded"></span>
    				<span class="w-6 h-1 bg-orange-500 rounded"></span>
				</button>
				<div class="flex items-center bg-white rounded-full px-4 py-2 w-52">
    				<button type="submit" class="text-gray-500">
       				 🔍
    				</button>
					<input type="text" placeholder="جستجو کنید ..." class="bg-transparent outline-none flex-1 text-right placeholder-gray-500 text-sm">
				</div>

            </div>
            <nav class="flex grid grid-cols-6 items-center gap-2">
                <button class="bg-white flex flex-col items-center rounded-lg text-gray-700">
                    <img src="./inc/svg/user icon.svg" alt="پروفایل" class="w-6 h-6">
                    <span>پروفایل</span>
                </button>
                <button class="bg-white flex flex-col items-center rounded-lg text-gray-700">
                    <img src="./inc/svg/store icon.svg" alt="فروشگاه" class="w-6 h-6">
                    <span>فروشگاه</span>
                </button>
                <a href="magazine" class="bg-white flex flex-col items-center rounded-lg text-gray-700">
                    <img src="./inc/svg/mag-icon.svg" alt="مجله" class="w-6 h-6">
                    <span>مجله</span>
                </a>
                <button class="bg-white flex flex-col items-center rounded-lg text-gray-700">
                    <img src="./inc/svg/chat-icon.svg" alt="گفتگو" class="w-6 h-6">
                    <span>گفتگو</span>
                </button>
                <a href="./" class="bg-white flex flex-col items-center rounded-lg text-gray-700">
                    <img src="./inc/svg/tools-icon.svg" alt="ابزارها" class="w-6 h-6">
                    <span>ابزارها</span>
                </button>
                <a href="./order" class="bg-white flex flex-col items-center rounded-lg text-gray-700">
                    <img src="./inc/svg/order-icon.svg" alt="سفارش" class="w-6 h-6">
                    <span>سفارش</span>
                </a>
            </nav>
            <div class="flex items-center gap-4">
                <span class="flex items-center justify-center bg-white relative w-20 h-10 rounded-lg gap-1">
                    <img src="./inc/svg/basket-icon.svg" alt="سبد" class="w-6 h-6">
                    <span class="text-xs px-1 rounded-full">۲۵</span>
                </span>
				<span class="flex items-center justify-center text-red-500">
                    <img src="./inc/svg/new-massage-icon.svg" alt="اعلان" class="w-6 h-6">
					<span class="text-red-500 text-[15px]">۳۷ اعلان جدید دارید</span>
				</span>
            </div>
		</div>		
	</header>
        {{ $slot }} <!-- محتوای صفحه اصلی در اینجا قرار می‌گیرد -->

</body>
</html>