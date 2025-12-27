<x-main-layout>
<style>
.item {
  position: relative;
  padding-right: 2px; /* فضای لازم برای تیک */
}

.item::after {
  content: '\2713'; /* Unicode for check mark */
  position: absolute;
  right: -20px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 1.5rem;
  color: green;
  transition: opacity 0.3s ease;
  opacity: 1; /* تیک نمایشی */
}


</style>
    <div class="rounded-lg">
        <div class="text-center bg-gray-400 text-lg font-bold border-b pb-4">زیر نویس فیلم از نحوه ساخت</div>
        
<div class="flex items-center justify-between bg-gray-300 rounded-lg p-2 text-gray-800 text-sm">
    <!-- سمت راست -->
    <div class="flex items-center space-x-2">
        <div class="bg-orange-500 text-white rounded-full p-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 12.121A4 4 0 117.88 9.88M7 16h10M12 12v4M12 6v2"></path>
            </svg>
        </div>
        <span>سفارش طرح جدید برای ساخت</span>
    </div>

    <!-- سمت چپ -->
    <div class="flex items-center space-x-2">
        <span>مهرداد حیدری</span>
        <div class="bg-orange-500 text-white rounded-full p-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 12.121A4 4 0 117.88 9.88M7 16h10M12 12v4M12 6v2"></path>
            </svg>
        </div>
    </div>
</div>





<div class="flex items-center justify-center bg-gray-200 min-h-screen">
    <!-- فیلترهای انتخاب -->
    <div class="relative flex flex-col gap-6 w-1/4">
        <div class="item relative flex items-center justify-between bg-white shadow-md rounded-md p-2 before:content-[''] before:absolute before:-left-[100px] before:top-1/2 before:w-[100px] before:h-[2px] before:bg-orange-400">
            <span>طلا</span>
            <select class="border-none bg-transparent">
                <option>طلا</option>
                <option>نقره</option>
            </select>
        </div>

        <div class="item relative flex items-center justify-between bg-white shadow-md rounded-md p-2 before:content-[''] before:absolute before:-left-[100px] before:top-1/2 before:w-[100px] before:h-[2px] before:bg-orange-400">
            <span>گردنبند</span>
            <select class="border-none bg-transparent">
                <option>گردنبند</option>
                <option>دستبند</option>
            </select>
        </div>

        <div class="item relative flex items-center justify-between bg-white shadow-md rounded-md p-2 before:content-[''] before:absolute before:-left-[100px] before:top-1/2 before:w-[100px] before:h-[2px] before:bg-orange-400">
            <span>ارتفاع / وزن</span>
            <select class="border-none bg-transparent">
                <option>3.5 گرم</option>
                <option>5 گرم</option>
            </select>
        </div>

        <div class="item relative flex items-center justify-between bg-white shadow-md rounded-md p-2 before:content-[''] before:absolute before:-left-[100px] before:top-1/2 before:w-[100px] before:h-[2px] before:bg-gray-500">
            <span>زنجیر داشته باشه</span>
            <select class="border-none bg-transparent">
                <option>بله</option>
                <option>خیر</option>
            </select>
        </div>
    </div>

    <!-- دایره انتخاب طرح -->
    <div class="relative flex items-center justify-center mx-10">
        <div class="w-80 h-80 md:w-80 md:h-80 border-4 border-yellow-400 rounded-full flex items-center justify-center bg-white">
            <span class="text-orange-500 font-bold text-3xl">+</span>
        	<p class="absolute text-orange-500 text-sm">انتخاب طرح / آپلود عکس</p>
        </div>
    </div>


    <!-- بخش جزئیات سفارش -->
    <div class="bg-white text-center  shadow-md rounded-lg p-2 w-1/3 -mr-[100px]">
        <h2 class="text-lg font-bold mb-3">جزئیات سفارش</h2>
        <div class="flex flex-wrap gap-1 justify-center">
            <span class="bg-gray-300 text-black px-3 py-1 rounded-md text-sm">طلا</span>
            <span class="bg-gray-300 text-black px-3 py-1 rounded-md text-sm">گردنبند</span>
            <span class="bg-gray-300 text-black px-3 py-1 rounded-md text-sm">3.5 گرم</span>
            <span class="bg-gray-300 text-black px-3 py-1 rounded-md text-sm">زنجیرشگارو</span>
        </div>
        <p class="text-gray-700 text-sm mb-2">طرح لیزری مدل فانتزی ۱۴۰</p>
        <p class="text-gray-700 text-sm mb-4">قیمت: <span class="font-bold">۴۳,۲۴۵,۰۰۰</span></p>
    	<button class="bg-orange-500 text-white p-2 rounded-md absolute">
            افزودن به سبد خرید
        </button>
    </div>

</div>

        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-6">
            <div class="border p-4 rounded-lg text-center bg-white h-[200px]">اسلایدر مخصوص این صفحه</div>
            <div class="border p-4 rounded-lg text-center bg-white h-[200px]">آکاردئون سوالات متداول</div>
        </div>
        
<div class="max-w-2xl mx-auto p-4 border rounded-lg shadow bg-white">
    <p class="text-gray-700 text-center mb-3">
        قبل از سفارش طرح جدید، اسم محصولی که می‌خواهی رو پایین بنویس، شاید آماده‌شو داشته باشیم!
    </p>

    <div class="flex justify-center items-center gap-2">
        <input type="text" placeholder="اینجا بنویس..." 
            class="border p-2 rounded-md focus:outline-none focus:ring focus:ring-orange-300 w-60">
        <button class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600">
            پیدا کن
        </button>
    </div>

    <div class="mt-4 p-4 border rounded-lg shadow-sm bg-gray-50">
        <p class="text-gray-700">
            نمایش محصولات بصورت جزئیات (کارت محصول در صفحه فروشگاه)
        </p>
        <button class="mt-3 flex items-center gap-1 text-orange-500 border border-orange-500 px-3 py-1 rounded-md hover:bg-orange-500 hover:text-white transition">
            🔍 دیدن محصول
        </button>
    </div>
</div>


        
    </div>
</x-main-layout>