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
       
        <!-- اسلایدر عکس -->
        <div class="relative w-full max-w-4xl mx-auto mt-4">
            <div class="overflow-hidden rounded-lg shadow-lg">
                <div class="flex transition-transform duration-500 ease-in-out h-100" id="slider">
                    <img src="https://via.placeholder.com/800x400" class="w-full" alt="اسلاید 1">
                    <img src="https://via.placeholder.com/800x400" class="w-full" alt="اسلاید 2">
                    <img src="https://via.placeholder.com/800x400" class="w-full" alt="اسلاید 3">
                </div>
            </div>
            <button onclick="prevSlide()" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full">❯</button>
            <button onclick="nextSlide()" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full">❮</button>
        </div>
        <script>
            let index = 0;
            function showSlide() {
                const slider = document.getElementById("slider");
                const slides = slider.children.length;
                index = (index + slides) % slides;
                slider.style.transform = `translateX(-${index * 100}%)`;
            }
            function nextSlide() { index++; showSlide(); }
            function prevSlide() { index--; showSlide(); }
            setInterval(nextSlide, 3000);
        </script>

        
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

    
    <!-- Posts Grid -->
    <div class="mt-6 bg-gray-300 m-4 rounded-lg">
        <!-- Tabs -->
        <div class="flex items-center justify-between mt-2 pt-2 rounded-lg">
			<div></div>
        	<div class="flex gap-4">
                <button class="bg-gray-100 px-4 py-2 rounded-lg text-gray-700">پست‌های ذخیره شده</button>
                <button class="bg-orange-500 px-4 py-2 rounded-lg text-white">پست‌های برتر</button>
            </div>
            <div class="text-gray-700 font-bold">negarino mag</div>
        </div>
        
        <!-- Posts Grid -->
        <div class="grid grid-cols-5 gap-4 text-right">
            <!-- Sample Post Card -->
            <div class="bg-gray-200 rounded-lg p-2 shadow-md">
                <div class="bg-gray-400 h-40 rounded-lg"></div>
                <p class="text-orange-500 mt-2">دیتا لحظه‌ای</p>
                <p class="text-gray-600 text-sm">لورم ایپسوم متن ساختگی از تولید سادگی نامفهوم ...</p>
                <div class="flex justify-between mt-2 text-gray-500 text-xs">
                    <span>۱۳.۲K ❤️</span>
                    <span>۱.۸K 💬</span>
                </div>
            </div>
            <!-- تکرار کارت‌ها -->
            <div class="bg-white rounded-lg p-4 shadow-md">...</div>
            <div class="bg-white rounded-lg p-4 shadow-md">...</div>
            <div class="bg-white rounded-lg p-4 shadow-md">...</div>
            <div class="bg-white rounded-lg p-4 shadow-md">...</div>
        </div>
        
        <!-- Slideshow Section -->
        <div class="bg-white p-6 mt-6 rounded-lg text-center shadow-md">
            <p class="text-gray-500">پست بذارید و سکه بگیرید</p>
            <button class="bg-orange-500 text-white p-3 rounded-full mt-2">➕ اسلاید</button>
        </div>
        
        <!-- Categories -->
        <div class="flex gap-4 mt-6 justify-center">
            <button class="bg-gray-200 px-4 py-2 rounded-lg text-gray-700">پست های نگارینو</button>
            <button class="bg-gray-200 px-4 py-2 rounded-lg text-gray-700">پست های آموزشی</button>
            <button class="bg-gray-200 px-4 py-2 rounded-lg text-gray-700">پست های کاربران</button>
            <button class="bg-orange-500 px-4 py-2 rounded-lg text-white">همشو ببین</button>
        </div>
	</div>
	</div>
    <!-- Slideshow Section -->
    <div class="bg-white p-6 mt-6 rounded-lg text-center shadow-md">
        <p class="text-gray-500">پست بذارید و سکه بگیرید</p>
        <button class="bg-gray-200 p-3 rounded-full mt-2">➕ اسلاید</button>
    </div>
    
    <!-- Categories -->
    <div class="flex gap-4 mt-6">
        <button class="bg-gray-200 px-4 py-2 rounded-lg text-gray-700">پست های نگارینو</button>
        <button class="bg-gray-200 px-4 py-2 rounded-lg text-gray-700">پست های آموزشی</button>
        <button class="bg-gray-200 px-4 py-2 rounded-lg text-gray-700">پست های کاربران</button>
        <button class="bg-orange-500 px-4 py-2 rounded-lg text-white">همشو ببین</button>
    </div>
    
        
</div>
</x-main-layout>