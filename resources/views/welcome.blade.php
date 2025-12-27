<x-main-layout>
    <x-slot name="header">
    </x-slot>


    <div class="flex items-center justify-between bg-gray-300/80 rounded-lg shadow-md p-2">
		<div class="flex bg-white text-gray-600 px-6 py-1 rounded-full shadow hover:bg-gray-100">
        	<img src="./inc/svg/help-logo.svg" alt="اموزش" class="h-5">
        	<button class="mr-2">
            	آموزش
        	</button>
		</div>

        <div class="flex mx-4 gap-2">
            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-lg shadow hover:bg-gray-200">
				<img src="./inc/svg/select-draw-icon.svg" >
            </button>
            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-lg shadow hover:bg-gray-200">
				<img onclick="undo()" src="./inc/svg/undo-icon.svg" >
            </button>
            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-lg shadow hover:bg-gray-200">
				<img src="./inc/svg/miror-icon.svg" >
            </button>
            <button onclick="copyOrPasteObject()" class="w-8 h-8 flex items-center justify-center bg-white rounded-lg shadow hover:bg-gray-200">
				<img src="./inc/svg/copy-draw icon.svg" >
            </button>
            <button onclick="deleteSelected()" class="w-8 h-8 flex items-center justify-center bg-white rounded-lg shadow hover:bg-gray-200">
				<img src="./inc/svg/delete1_icon.svg" >
            </button>
        </div>
        <img src="./inc/svg/negarino-draw-logo.svg" alt="لوگو" class="">
    </div>
        
        <!-- Main Content -->
        <main class="flex item-center grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <!-- Sidebar -->

    <div class="bg-gray-300 w-36 p-2 rounded-lg shadow-md flex flex-col gap-2">
        <!-- عنوان منو -->
        <p class="text-xs text-right text-gray-700 mb-2">ورود کردن:</p>

        <!-- دکمه‌های منو -->
        <button onclick="openModal('readydraw')" class="flex items-center justify-between w-full bg-orange-100 text-orange-600 px-2 py-1 rounded-lg shadow hover:bg-orange-200">
            <img src="./inc/svg/ready-draw-icon.svg" class="h-4">
        	<span class="text-sm">طرح آماده</span>
        </button>

        <button onclick="openModal('simpleShapes')" class="flex items-center justify-between w-full bg-white text-gray-700 px-2 py-1 rounded-lg shadow hover:bg-gray-100">
            <img src="./inc/svg/simple-draw-icon.svg" class="h-4">
            <span class="text-sm">شکل ساده</span>
        </button>

        <button onclick="openModal('extraParts')" class="flex items-center justify-between w-full bg-white text-gray-700 px-2 py-1 rounded-lg shadow hover:bg-gray-100">
            <img src="./inc/svg/kharj-kar-icon.svg" class="h-4">
            <span class="text-sm">خرجکار</span>
        </button>

        <button onclick="openModal('textName')" class="flex items-center justify-between w-full bg-white text-gray-700 px-2 py-1 rounded-lg shadow hover:bg-gray-100">
            <img src="./inc/svg/add-text-icon.svg" class="h-4">
            <span class="text-sm">متن / اسم</span>
        </button>

        <button class="flex items-center justify-between w-full bg-white text-gray-700 px-2 py-1 rounded-lg shadow hover:bg-gray-100">
            <img src="./inc/svg/add-product-icon.svg" class="h-4">
            <span class="text-sm">محصول</span>
        </button>

        <button class="flex items-center justify-between w-full bg-white text-gray-700 px-2 py-1 rounded-lg shadow hover:bg-gray-100">
            <img src="./inc/svg/pen-icon.svg" class="h-4">
            <span class="text-sm">قلم</span>
        </button>

        <button onclick="openModal('image')" class="flex items-center justify-between w-full bg-white text-gray-700 px-2 py-1 rounded-lg shadow hover:bg-gray-100">
            <img src="./inc/svg/add-image-icon.svg" class="h-4">
            <span class="text-sm">تصویر</span>
        </button>

        <button onclick="openModal('finalDesign')" class="flex items-center justify-between w-full bg-white text-gray-700 px-2 py-1 rounded-lg shadow hover:bg-gray-100">
            <img src="./inc/svg/done-draw-icon.svg" class="h-4">
            <span class="text-sm">تکمیل طرح</span>
        </button>

        <!-- دکمه‌های پایین -->
        <button class="flex mt-8 items-center justify-between w-full bg-orange-100 text-orange-600 px-2 py-1 rounded-lg shadow hover:bg-orange-200">
            <img src="./inc/svg/save-icon.svg" class="h-4">
            <span class="text-sm">ذخیره طرح</span>
        </button>

        <button class="flex items-center justify-between w-full bg-orange-100 text-orange-600 px-2 py-1 rounded-lg shadow hover:bg-orange-200">
            <img src="./inc/svg/draws-icon.svg" class="h-4">
            <span class="text-sm">طراحی‌ها</span>
        </button>
    </div>
            
            <!-- Design Area -->
			<section class="p-4 rounded-lg shadow flex flex-col items-center justify-center min-h-[300px] w-full">
        		<div class="">
  					<canvas id="myCanvas" width="600" height="400" class="border-4 rounded-3xl border-blue-500"></canvas>
            	</div>
        	</section>
            
            <!-- Product Search -->

    <div class="bg-gray-300 w-44 p-2 rounded-lg shadow-md flex flex-col gap-2">
        <!-- عنوان منو -->
		<div class="flex justify-between text-right text-gray-700 mb-2 text-[7px]">
        	<p class="">آخرین طراحی‌ها</p>
        	<p><a>مشاهده همه</a></p>
        </div>

        <!-- لیست طرح‌ها -->
        <div class="flex flex-col gap-2">
            <!-- یک آیتم تکرارشونده -->
            <div class="flex items-center justify-between bg-white p-2 rounded-lg shadow-md">
                <div class="flex flex-col gap-1">
                    <button class="w-6 h-6 flex items-center justify-center bg-white border border-gray-400 rounded-full shadow hover:bg-gray-100">
                        🗑️
                    </button>
                    <button class="w-6 h-6 flex items-center justify-center bg-orange-100 border border-orange-400 rounded-full shadow hover:bg-orange-200">
                        ✏️
                    </button>
                </div>
        		<div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded-md border border-gray-400">
                    ➕
                </div>
            </div>

            <!-- 7 بار دیگر همین آیتم -->
            <div class="flex items-center justify-between bg-white p-2 rounded-lg shadow-md">
                <div class="flex flex-col gap-1">
                    <button class="w-6 h-6 flex items-center justify-center bg-white border border-gray-400 rounded-full shadow hover:bg-gray-100">
                        🗑️
                    </button>
                    <button class="w-6 h-6 flex items-center justify-center bg-orange-100 border border-orange-400 rounded-full shadow hover:bg-orange-200">
                        ✏️
                    </button>
                </div>
        		<div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded-md border border-gray-400">
                    ➕
                </div>
            </div>

                    <div class="flex items-center justify-between bg-white p-2 rounded-lg shadow-md">
                <div class="flex flex-col gap-1">
                    <button class="w-6 h-6 flex items-center justify-center bg-white border border-gray-400 rounded-full shadow hover:bg-gray-100">
                        🗑️
                    </button>
                    <button class="w-6 h-6 flex items-center justify-center bg-orange-100 border border-orange-400 rounded-full shadow hover:bg-orange-200">
                        ✏️
                    </button>
                </div>
        		<div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded-md border border-gray-400">
                    ➕
                </div>
            </div>
            <div class="flex items-center justify-between bg-white p-2 rounded-lg shadow-md">
                <div class="flex flex-col gap-1">
                    <button class="w-6 h-6 flex items-center justify-center bg-white border border-gray-400 rounded-full shadow hover:bg-gray-100">
                        🗑️
                    </button>
                    <button class="w-6 h-6 flex items-center justify-center bg-orange-100 border border-orange-400 rounded-full shadow hover:bg-orange-200">
                        ✏️
                    </button>
                </div>
        		<div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded-md border border-gray-400">
                    ➕
                </div>
            </div>
            <div class="flex items-center justify-between bg-white p-2 rounded-lg shadow-md">
                <div class="flex flex-col gap-1">
                    <button class="w-6 h-6 flex items-center justify-center bg-white border border-gray-400 rounded-full shadow hover:bg-gray-100">
                        🗑️
                    </button>
                    <button class="w-6 h-6 flex items-center justify-center bg-orange-100 border border-orange-400 rounded-full shadow hover:bg-orange-200">
                        ✏️
                    </button>
                </div>
        		<div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded-md border border-gray-400">
                    ➕
                </div>
            </div>
            <div class="flex items-center justify-between bg-white p-2 rounded-lg shadow-md">
                <div class="flex flex-col gap-1">
                    <button class="w-6 h-6 flex items-center justify-center bg-white border border-gray-400 rounded-full shadow hover:bg-gray-100">
                        🗑️
                    </button>
                    <button class="w-6 h-6 flex items-center justify-center bg-orange-100 border border-orange-400 rounded-full shadow hover:bg-orange-200">
                        ✏️
                    </button>
                </div>
        		<div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded-md border border-gray-400">
                    ➕
                </div>
            </div>
        </div>
    </div>
        
    <div id="popup" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg bg-gray-300 relative">
        	<div class="flex items-center justify-between h-8">
        		<div class="flex items-center justify-center">
                    <img src="./inc/svg/ready-draw-icon.svg" class="h-4">
        			<h2 class="text-lg font-bold text-orange-600 mr-2">طرح آماده</h2>
				</div>
        		<div class="flex gap-1">
					<div onclick="openModal('readydraw')" class="rounded-lg ml-2 px-2 py-1 cursor-pointer">طرح آماده</div>
					<div onclick="openModal('simpleShapes')" class="bg-white rounded-lg ml-2 px-2 py-1 cursor-pointer">اشکال ساده</div>
					<div onclick="openModal('extraParts')" class="bg-white rounded-lg ml-2 px-2 py-1 cursor-pointer">خرج کار</div>
					<div onclick="openModal('textName')" class="bg-white rounded-lg ml-2 px-2 py-1 cursor-pointer">متن/اسم</div>
					<div onclick="openModal('image')" class="bg-white rounded-lg ml-2 px-2 py-1 cursor-pointer">تصویر</div>
					<div onclick="openModal('finalDesign')" class="bg-white rounded-lg ml-2 px-2 py-1 cursor-pointer">تکمیل طرح</div>
        		</div>
            	<img onclick="closeModal()" class="h-4 text-gray-600 hover:text-gray-900" src="./inc/svg/close-icon.svg">
            </div>
        	<div id="paneldraw" class="gap-2">
				
            </div>
			<div class="flex justify-between bordered-1">
        		<div class="">لیست svg انتخاب شده</div>
        		<button>درج</button>
        	</div>
        </div>
    </div>
    

        </main>
        
        <!-- Footer -->
        <footer class="item-center text-center text-gray-600 bg-gray-300">
        	<input class="m-2 rounded-lg" name="fhg" placeholder="افزودن یاداشت">
        </footer>
<script>
    let readydraw = `
    <div class="grid grid-cols-12 gap-2">
        <div onclick="selectDesign(this)" class="border bg-gray-200 flex items-center justify-center rounded-md hover:border-orange-500 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 1v22M5 12h14"/>
            </svg>
        </div>
        <div onclick="selectDesign(this)" class="border bg-gray-200 p-2 flex items-center justify-center rounded-md hover:border-orange-500 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 13l4 4L19 7"/>
            </svg>
        </div>
        <div onclick="selectDesign(this)" class="border bg-gray-200 p-2 flex items-center justify-center rounded-md hover:border-orange-500 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 12s4-8 10-8 10 8 10 8-4 8-10 8-10-8-10-8z"/>
                <circle cx="12" cy="12" r="3"/>
            </svg>
        </div>
    </div>
    `;

    let simpleShapes = `
    	<div class="grid grid-cols-12 gap-2">
            <div onclick="selectDesign(this)" class="border p-2 rounded-md hover:border-orange-500 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/></svg></div>
            <div onclick="selectDesign(this)" class="border p-2 rounded-md hover:border-orange-500 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12,4 4,20 20,20"/></div>
            <div onclick="selectDesign(this)" class="border p-2 rounded-md hover:border-orange-500 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16"/></div>
    	</div>
    `;

    let extraParts = `
    	<div class="grid grid-cols-12 gap-2">
            <div class="border p-2 rounded-md hover:border-orange-500 cursor-pointer">📌 پین</div>
            <div class="border p-2 rounded-md hover:border-orange-500 cursor-pointer">🔩 پیچ</div>
            <div class="border p-2 rounded-md hover:border-orange-500 cursor-pointer">🔧 مهره</div>
    	</div>
    `;

	let textName = `
		<select id="fontSelect" onchange="changeFont(this)" class="border p-2 w-full rounded-md mb-2">
		    <option value="Arial" style="font-family: Arial;">Arial</option>
		    <option value="Verdana" style="font-family: Verdana;">Verdana</option>
		    <option value="Tahoma" style="font-family: Tahoma;">Tahoma</option>
		    <option value="Georgia" style="font-family: Georgia;">Georgia</option>
		    <option value="Courier New" style="font-family: 'Courier New';">Courier New</option>
		</select>
    	<input id="textInput" type="text" placeholder="متن خود را وارد کنید" class="border p-2 w-full rounded-md mb-2">
    	<button onclick="addTextToCanvas()" class="bg-blue-500 text-white px-4 py-2 rounded-md">اضافه کردن</button>
	`;


	/*let image = `
    	<p class="text-gray-700">افزودن تصویر:</p>
    	<input type="file" class="border p-2 w-full rounded-md" onchange="addImageToCanvas(event)">
	`;*/
	let image = `
    <div class="w-full max-w-md p-4 bg-white rounded-lg shadow-lg">
        <!-- دراپ‌زون -->
        <div id="dropzone" class="flex flex-col items-center justify-center w-full h-48 p-4 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:bg-gray-100">
            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h14m-4 4l4 4m0-8l-4 4"></path>
            </svg>
            <p class="mt-2 text-sm text-gray-600">عکس خود را اینجا بکشید و رها کنید</p>
            <input type="file" id="fileInput" class="hidden" accept="image/*">
            <button onclick="document.getElementById('fileInput').click()" class="mt-3 px-4 py-2 text-sm font-semibold text-red-600 border border-red-500 rounded-md hover:bg-red-100">
                📂 از حافظه عکس بیاورید
            </button>
        </div>

        <!-- پیش نمایش تصویر -->
        <div id="preview" class="mt-4 hidden relative">
            <img id="previewImg" class="w-full h-40 object-cover rounded-md shadow-md" src="" alt="Preview">
            <div class="absolute top-2 left-2 flex space-x-2">
                <button id="deleteBtn" class="p-1 bg-red-600 text-white rounded-full hover:bg-red-800">
                    🗑️
                </button>
                <button id="insertBtn" class="p-1 bg-red-600 text-white rounded-full hover:bg-red-800">
                    send
                </button>
            </div>
        </div>
    </div>`;

    let finalDesign = `
        <p class="text-gray-700">تکمیل طرح:</p>
        <button onclick="savejson()" class="bg-green-500 text-white px-4 py-2 rounded-md">ثبت نهایی</button>
        <button onclick="dljson()" class="bg-green-500 text-white px-4 py-2 rounded-md">ذخیره json</button>
        <button onclick="dlimg()" class="bg-green-500 text-white px-4 py-2 rounded-md">ذخیره عکس</button>
        <button onclick="loadFromJSON()" class="bg-green-500 text-white px-4 py-2 rounded-md">بارگذاری طرح</button>
		<button onclick="downloadJSON()">دانلود JSON</button>
    `;

    function openModal(id) {
        document.getElementById('popup').classList.remove('hidden');

		// حذف رنگ پس‌زمینه از همه دکمه‌ها
		document.querySelectorAll('#popup .flex.gap-1 div').forEach(el => {
		    el.classList.remove('bg-orange-200');
		    el.classList.add('bg-white');
		});

		// افزودن رنگ پس‌زمینه به دکمه‌ی انتخاب‌شده
		const activeButton = document.querySelector(`#popup .flex.gap-1 div[onclick="openModal('${id}')"]`);
		if (activeButton) {
		    activeButton.classList.add('bg-orange-200');
		    activeButton.classList.remove('bg-white');
		}

    
        let content = {
            "readydraw": readydraw,
            "simpleShapes": simpleShapes,
            "extraParts": extraParts,
            "textName": textName,
            "image": image,
            "finalDesign": finalDesign
        };

        document.getElementById('paneldraw').innerHTML = content[id] || "<p>محتوای بخش انتخاب‌شده موجود نیست.</p>";
        if(id=="image"){
        	const dropzone = document.getElementById('dropzone');
        	const fileInput = document.getElementById('fileInput');
        	const preview = document.getElementById('preview');
        	const previewImg = document.getElementById('previewImg');
        	const deleteBtn = document.getElementById('deleteBtn');
			const insertBtn = document.getElementById('insertBtn');

        // عملکرد دراپ‌زون
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('bg-gray-200');
        });

        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('bg-gray-200');
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('bg-gray-200');
            const file = e.dataTransfer.files[0];
            handleFile(file);
        });

        // عملکرد آپلود از فایل اینپوت
        fileInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            handleFile(file);
        });

        // نمایش تصویر آپلود شده
        function handleFile(file) {
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImg.src = e.target.result;
                    preview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        }

        	// حذف تصویر
       	 	deleteBtn.addEventListener('click', () => {
            	preview.classList.add('hidden');
            	previewImg.src = "";
            	fileInput.value = null;
        	});
        
			// اضافه کردن رویداد کلیک به دکمه
			insertBtn.addEventListener('click', () => {
    			const file = fileInput.files[0]; // گرفتن فایل انتخاب‌شده از ورودی فایل
    			addImageToCanvas(file); // استفاده از تابع برای اضافه کردن تصویر به بوم
			});
        }
    }

    function closeModal() {
        document.getElementById('popup').classList.add('hidden');
    }

    // ایجاد بوم (Canvas) تنها یک‌بار در ابتدای بارگذاری صفحه
    const canvas = new fabric.Canvas('myCanvas');

	let selectedFont = 'Arial'; // فونت پیش‌فرض

    // زمانی که روی یک عنصر SVG کلیک می‌شود، کد HTML آن استخراج و نمایش داده می‌شود
    function selectDesign(svgElement) {
        // گرفتن کد HTML از عنصر کلیک‌شده
        const svgContent = svgElement.outerHTML;
       	fabric.loadSVGFromString(svgContent, function(objects, options) {
            const svgObject = fabric.util.groupSVGElements(objects, options);
            canvas.add(svgObject);
            canvas.renderAll();
        });
    	saveState();
    }

	function changeFont(selectElement) {
    	selectedFont = selectElement.value;
    	document.getElementById("textInput").style.fontFamily = selectedFont;
	}

function addTextToCanvas() {
    const textInput = document.getElementById('textInput').value;

    if (textInput) {
        const text = new fabric.Text(textInput, {
            left: 100,  // موقعیت افقی
            top: 100,   // موقعیت عمودی
            fontFamily: selectedFont,
            fontSize: 30,
            fill: '#000', // رنگ متن
        });

        canvas.add(text);
        canvas.renderAll();
        saveState();
    } else {
        alert('لطفاً متن خود را وارد کنید.');
    }
}
function addImageToCanvas(event) {
    const file = event.target.files[0]; // گرفتن فایل انتخاب‌شده
    if (file) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            const imgElement = new Image();
            imgElement.src = e.target.result;
            
            imgElement.onload = function() {
                const img = new fabric.Image(imgElement, {
                    left: 100,  // موقعیت افقی
                    top: 100,   // موقعیت عمودی
                    angle: 0,   // زاویه
                    scaleX: 0.5, // مقیاس تصویر
                    scaleY: 0.5  // مقیاس تصویر
                });
                
                canvas.add(img);
                canvas.renderAll();
                saveState();
            };
        };
        
        reader.readAsDataURL(file); // بارگذاری تصویر به فرمت base64
    } else {
        alert('لطفاً یک تصویر انتخاب کنید.');
    }
}


        // ذخیره طرح به‌صورت JSON
        function dljson() {
            var json = JSON.stringify(canvas);
            localStorage.setItem("fabricCanvas", json);
            alert("طرح ذخیره شد!");
        }

        // بارگذاری طرح از JSON
        function loadFromJSON() {
            var json = localStorage.getItem("fabricCanvas");
            if (json) {
                canvas.loadFromJSON(json, function() {
                    canvas.renderAll();
                    alert("طرح بازیابی شد!");
                });
            } else {
                alert("طرحی برای بارگذاری یافت نشد!");
            }
        }

        // ذخیره طرح به‌صورت تصویر (PNG)
        function dlimg() {
            var dataURL = canvas.toDataURL({
                format: 'png',
                quality: 1.0
            });

            var link = document.createElement('a');
            link.href = dataURL;
            link.download = "canvas-image.png";
            link.click();
        }
		
        // تابع ذخیره طرح به عنوان فایل JSON
		function downloadJSON() {
    		var json = JSON.stringify(canvas);
    		var blob = new Blob([json], { type: "application/json" });
    		var link = document.createElement("a");

    		link.href = URL.createObjectURL(blob);
    		link.download = "canvas-design.json";
    		document.body.appendChild(link);
    		link.click();
    		document.body.removeChild(link);
		}

		// ذخیره تاریخچه بوم
		let history = [];
		let historyIndex = -1;

// ذخیره وضعیت بوم در تاریخچه
function saveState() {
    const currentState = JSON.stringify(canvas.toJSON());

    // اگر در وسط تاریخچه باشیم و تغییری ایجاد کنیم، بقیه تغییرات را حذف کنیم
    if (historyIndex < history.length - 1) {
        history = history.slice(0, historyIndex + 1);
    }

    // بررسی نکنیم که آیا وضعیت فعلی با آخرین وضعیت ذخیره شده یکی است یا نه
    if (history.length === 0 || history[history.length - 1] !== currentState) {
        history.push(currentState);
        historyIndex++;
    }

    // محدود کردن تعداد تاریخچه‌ها (مثلاً 50 مورد اخیر)
    if (history.length > 50) {
        history.shift();
        historyIndex--;
    }
}

// بازگشت به مرحله قبلی (Undo)
function undo() {
    if (historyIndex > 0) {
        historyIndex--;
        const prevState = history[historyIndex];
        canvas.loadFromJSON(prevState, canvas.renderAll.bind(canvas));
    }
}

// ادامه دادن به مرحله بعدی (Redo)
function redo() {
    if (historyIndex < history.length - 1) {
        historyIndex++;
        const nextState = history[historyIndex];
        canvas.loadFromJSON(nextState, canvas.renderAll.bind(canvas));
    }
}
function deleteSelected() {
    var activeObject = canvas.getActiveObject();
    if (activeObject) {
        canvas.remove(activeObject);
        canvas.discardActiveObject(); // حذف انتخاب
        canvas.requestRenderAll(); // رندر مجدد بوم
        saveState(); // ذخیره وضعیت جدید در تاریخچه (در صورت استفاده از Undo/Redo)
    } else {
        alert("هیچ شیئی انتخاب نشده است!");
    }
}
let copiedObject = null;

function copyOrPasteObject() {
    var activeObject = canvas.getActiveObject();

    if (activeObject) {
        // اگر آیتمی انتخاب شده ولی چیزی کپی نشده، آن را کپی کن
        activeObject.clone(function(cloned) {
            copiedObject = cloned;
            //alert("شیء کپی شد!");
        });
        // اگر قبلاً چیزی کپی شده است، آن را پیست کن
        copiedObject.clone(function(clonedObj) {
            clonedObj.set({
                left: clonedObj.left + 20, // کمی جابه‌جا شود
                top: clonedObj.top + 20, 
                evented: true
            });

            canvas.add(clonedObj);
            canvas.setActiveObject(clonedObj);
            canvas.requestRenderAll();
            saveState(); // ذخیره در تاریخچه (اگر Undo/Redo فعال است)
            //alert("شیء چسبانده شد!");
        });
    } else {
        alert("ابتدا یک شیء را انتخاب کنید!");
    }
}

// ذخیره وضعیت هنگام تغییرات در بوم
canvas.on('object:modified', saveState);
canvas.on('object:added', saveState);
canvas.on('object:removed', saveState);

</script>
</x-main-layout>