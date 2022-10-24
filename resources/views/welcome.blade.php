<!DOCTYPE html>
<html id="html" lang="en" style="display: none"> <!--Display none för att undvika FOUC, byter till display block direkt i JS filen, verkar vara Firefox som har det problemet -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donkeyquiz</title>
        <link href='https://fonts.googleapis.com/css?family=Poppins:500,600,700' rel='stylesheet'>
    </head>
    <body class="flex justify-center h-screen text-darkblue bg-white box-border px-8 font-poppins tablet:px-16">
       
        <!--Start of nav -->
        <nav class="absolute top-0 left-0 w-full">
            <div class="flex m-8 justify-items-start items-center gap-8 tablet:ml-16 laptop:flex-col laptop:items-center laptop:w-fit laptop:gap-2">
                <svg width="96" height="112" viewBox="0 0 96 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_13_425)">
                        <path id="logo-blob" d="M28.0463 9.95076C35.2827 1.16307 44.2319 -1.16309 55.1935 0.473835C60.9313 1.33537 66.8831 2.84307 71.1222 6.84922C75.0615 10.5538 76.9455 15.9385 79.7716 20.5477C83.1971 26.2338 88.1213 30.9723 91.1614 36.8738C100.624 55.2246 95.0579 83.9138 84.3532 100.455C82.1695 103.858 79.5147 107.132 76.0463 109.2C68.5102 113.68 59.0472 111.742 50.4406 110.062C40.9777 108.252 31.3434 106.831 21.7091 106.271C14.0017 105.84 7.49326 104.074 3.42547 96.6646C0.0427711 90.5477 -0.29978 83.2246 0.214047 76.2461C1.88398 53.1138 12.5031 31.36 26.0767 12.4923C26.719 11.6308 27.3612 10.7692 28.0463 9.95076Z" fill="#7678ED" class="duration-0"/>
                        <path id="logo-donkey" d="M77.4594 71.2492C78.9581 70.9477 80.1998 70.4308 81.1418 68.9231C80.628 68.8369 80.1998 68.6646 79.7716 68.6646C78.8724 68.7077 77.9732 68.9231 77.074 68.9231C76.7315 68.9231 76.3033 68.6215 76.132 68.3631C76.0036 68.1477 76.0464 67.6739 76.2176 67.4585C76.7743 66.7692 77.4166 66.2092 77.9732 65.5631C78.1445 65.3477 78.3586 65.0031 78.3158 64.7877C78.2301 64.5723 77.8448 64.3569 77.5879 64.3139C77.2025 64.2708 76.7743 64.4 76.3889 64.4862C74.7618 64.7446 73.1347 65.0462 71.5076 65.3046C71.1222 65.3477 70.7368 65.2185 71.0366 64.7015C71.3791 64.0554 71.7217 63.3662 72.1499 62.7631C73.0919 61.4277 73.6913 59.9631 74.0767 58.4123C74.1195 58.24 74.0339 57.9385 73.9054 57.8092C73.777 57.7231 73.4772 57.7231 73.306 57.7662C72.9206 57.9385 72.578 58.24 72.1927 58.4554C71.5076 58.9292 70.9081 59.6615 69.752 59.3169C69.9233 58.8862 70.0517 58.4985 70.1802 58.0677C70.4799 57.3354 70.9509 56.6031 71.0794 55.8277C71.2935 54.5354 71.5076 53.7169 70.3086 53.0277C69.3666 53.9323 68.81 55.3108 67.2685 55.7846C67.2685 55.4831 67.2257 55.2677 67.3113 55.1385C67.868 53.8462 68.5102 52.5969 68.9813 51.2615C69.1525 50.7446 69.1953 49.8831 68.8956 49.4954C68.4246 48.8923 67.7823 49.4954 67.3113 49.84C67.2257 49.9262 67.14 50.0123 67.0544 50.0554C66.7119 50.2277 66.3693 50.4 65.8555 50.6585C66.4549 48.2462 67.611 46.3077 67.6539 43.8954C66.0267 44.4985 65.5986 46.1785 64.3996 47.2554C64.3568 46.9539 64.314 46.7385 64.3568 46.5662C64.4425 45.3169 64.5709 44.0246 64.6137 42.7754C64.6137 42.3446 64.3996 41.9139 64.2284 41.2677C63.5433 42.0862 63.0722 42.6462 62.43 43.3785C62.43 42.9908 62.43 42.8615 62.43 42.7323C62.5156 41.9139 62.6441 41.0954 62.6441 40.2769C62.6441 40.0615 62.4728 39.7169 62.3015 39.6739C62.173 39.6308 61.8305 39.8031 61.702 39.9754C61.1454 40.6646 60.76 40.7077 60.2034 40.0185C59.4326 39.0708 58.7904 37.9939 57.934 37.1323C57.2917 36.4862 57.2489 35.8831 57.4202 35.0646C57.8055 33.0831 58.1052 31.1015 58.405 29.12C58.5763 28.0431 58.6191 26.9231 58.8332 25.8031C59.2614 23.4339 59.5183 21.1077 59.0901 18.7385C58.8332 17.4031 57.5914 16.6277 56.4353 17.0585C55.9215 17.2739 55.4077 17.6185 54.9795 18.0062C54.5085 18.5231 54.0803 19.0831 53.7377 19.7292C52.7529 21.7539 51.8109 23.8215 50.8689 25.8892C50.4407 26.8369 50.1409 27.8708 49.7127 29.12C49.2417 28.56 48.8564 28.2154 48.7279 27.8277C48.2141 26.4062 47.6574 24.9846 47.3577 23.52C46.8011 20.8062 46.4157 18.0492 45.9875 15.2923C45.8162 14 45.859 12.7077 45.6021 11.4585C45.4309 10.5969 45.0455 9.73539 44.5745 8.96001C44.1035 8.2277 43.033 8.18462 42.4763 8.87385C42.1338 9.30462 41.7484 9.77847 41.5772 10.2523C41.1061 11.9323 40.6351 13.6123 40.421 15.3354C39.8644 19.0831 39.95 22.8308 40.5923 26.5785C40.9349 28.6031 41.2774 30.6277 42.3479 32.3939C42.4763 32.6092 42.5192 32.9108 42.6476 33.1692C41.7912 33.3846 41.0205 33.5139 40.2926 33.7723C38.8796 34.2462 37.4665 34.6769 36.1391 35.3231C35.0259 35.8831 34.1267 36.7446 33.099 37.4339C31.3434 38.64 30.1445 40.2769 29.6307 42.3015C28.9456 45.1877 28.5602 48.16 27.9179 51.0462C27.661 52.08 27.2328 53.2 26.5905 54.0615C25.7342 55.2246 24.578 56.1723 23.6788 57.2923C22.0945 59.2739 20.2105 60.9539 18.198 62.4615C16.9563 63.3662 16.0571 64.5723 15.0722 65.6923C13.4451 67.5877 12.4175 69.6123 12.8457 72.24C13.231 74.7385 14.2159 76.7631 16.6565 77.7539C17.4273 78.0554 18.2837 78.1415 19.0972 78.1846C20.0821 78.2277 21.0669 78.1415 22.0089 77.9692C22.0089 77.9692 25.4772 77.6677 32.3283 74.7816C33.8269 74.3077 35.3684 73.8769 36.8671 73.4031C38.3657 72.9292 39.7788 72.2831 41.3631 72.0246C42.4763 71.8523 42.8189 71.8523 42.7333 73.1877C42.6048 74.9539 42.4335 76.7631 42.4335 78.5292C42.4335 81.0708 42.6048 83.6123 42.7333 86.1539C42.7761 87.1877 43.033 88.1785 43.1615 89.2123C43.4184 90.72 43.6753 92.2277 43.8894 93.7785C43.975 94.3815 44.2747 95.1139 44.0606 95.6308C44.0606 95.6308 75.0615 104.634 82.8974 73.0585C81.099 72.4123 79.1721 72.3262 77.4594 71.2492ZM40.5923 63.28C40.0357 65.0462 39.2221 66.8123 37.9375 68.1908C36.6958 69.4831 35.0687 70.3877 33.2703 70.56C32.9277 70.6031 32.628 70.2585 32.628 69.9139C32.628 69.5262 32.9277 69.3108 33.2703 69.2677C36.5673 69.0092 38.4514 65.7785 39.3506 62.9785C39.6075 62.16 40.8492 62.4615 40.5923 63.28ZM45.4309 51.6492C44.1035 52.6831 42.6476 53.0277 41.1918 53.4585C39.2221 53.9754 37.2096 54.3631 35.24 54.7939C34.3836 54.9662 33.6985 54.3631 33.6557 53.2431C33.6128 52.1662 33.7841 51.0892 33.8697 50.0554C33.9554 48.5477 34.2123 47.0831 34.8974 45.7477C36.0107 43.6369 37.6806 42.1723 40.9777 42C41.7056 42.1723 43.1615 42.4308 44.4888 42.9477C45.6449 43.3785 46.5441 44.24 46.7582 45.5754C46.8011 45.7046 46.8867 45.8339 46.9723 45.9631C47.9572 47.7723 47.058 50.3569 45.4309 51.6492Z" fill="white" class="duration-0"/>
                        <path id="logo-eye" d="M39.95 47.0831C38.7939 47.0831 37.8091 48.0308 37.8091 49.2369C37.8091 49.5815 37.8947 49.9261 38.0232 50.1846C38.0232 50.2277 38.0232 50.2708 38.0232 50.2708C38.0232 50.6154 38.3229 50.9169 38.6655 50.9169C39.008 50.9169 39.3077 50.6154 39.3077 50.2708C39.3077 50.2277 39.3077 50.1415 39.3077 50.0985V50.0554V50.0123C39.3077 49.9261 39.3506 49.84 39.3506 49.7969C39.3506 49.7538 39.3934 49.7108 39.3934 49.7108L39.4362 49.6246L39.479 49.5815H39.5647C39.6503 49.5815 39.7359 49.5385 39.8216 49.5385H39.9072C39.95 49.5385 40.0357 49.5385 40.0785 49.5385C40.2069 49.5385 40.2926 49.5385 40.421 49.5385L40.5495 49.5815H40.5923L40.6351 49.6246L40.6779 49.5385C40.6779 49.5815 40.7208 49.6246 40.7208 49.6246C40.7208 49.6677 40.7636 49.7108 40.7636 49.7538V49.7969C40.7636 49.9261 40.7636 50.0554 40.7636 50.1846C40.7636 50.5292 41.0633 50.8308 41.4059 50.8308C41.7484 50.8308 42.0482 50.5292 42.0482 50.1846C42.0482 50.0123 42.0482 49.84 42.0053 49.6677C42.0482 49.5385 42.0482 49.3661 42.0482 49.1938C42.091 48.0308 41.149 47.0831 39.95 47.0831Z" fill="white" class="duration-0"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_13_425">
                            <rect width="96" height="112" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <h3 id="nav-header" class="text-24 font-semibold duration-0">donkeyquiz</h3>
            </div>
        </nav>
        
        <!--Start of blobs -->
        <svg viewBox="120 0 100 200" class="hidden w-[200px] left-0 top-[600px] absolute tablet:block laptop:w-[225px] laptop:top-[300px] desktop:w-[275px] desktop:top-[300px]">
            <path id="left-blob" d="" fill="#7678ED" class="duration-500"></path>
        </svg>

        <svg viewBox="-20 0 100 200" class="hidden w-[225px] right-0 top-[500px] absolute tablet:block laptop:w-[250px] laptop:top-[150px] desktop:w-[325px] desktop:top-[175px]">
            <path id="right-blob" d="" fill="#7678ED" class="duration-500"></path>
        </svg>

        <!--Start of progress bar-->
        <div id="progress-bar-container" class="absolute hidden px-8 bottom-8 tablet:px-48 w-full scale-0 laptop:p-0 laptop:w-1/2">
            <div id="progress-line" class="w-full h-[2px] relative bg-lightblue rounded-full flex align-center">
                <div id="progress-bar" class="h-[14px] absolute -mt-[6px] rounded-full bg-darkblue"></div>
            </div>
            <h4 id="question-number" class="w-full text-center mt-4"></h4>
        </div>

        <!--Start of front page -->
        <div id="front-page" class="hidden w-full h-full">
            <div class="flex flex-col justify-between items-center py-52 h-full tablet:py-72 laptop:pt-56 laptop:pb-36">
                <div id="front-page-text" class="flex flex-col gap-4 items-center duration-500 scale-0">
                    <h2 class="text-24 text-center font-semibold tablet:text-32 laptop:text-40 desktop:text-48">Svensk mästare i TP?</h2>
                    <p class="text-16 text-center w-52 tablet:text-center tablet:w-96 laptop:w-[450px]">Utmana vänner, kollegor och familj på frågesport. Svara på 35 samtida frågor i 7 olika kategorier.</p>
                </div>
                <div id="front-page-button-container" class="flex justify-center w-full duration-500 scale-0">
                    <input id="front-page-button" type="button" value="Klicka här för att starta" class="p-4 border-2 w-full rounded-full border-lightblue text-lightblue active:bg-darkblue active:text-white active:border-darkblue tablet:self-center tablet:w-96 laptop:hover:bg-darkblue laptop:hover:border-darkblue laptop:hover:text-white laptop:w-64 laptop:hover:cursor-pointer">
                </div>
            </div>
        </div>

        <!--Start of second page-->
        <div id="question-page" class="hidden w-full h-full">
            <div class="flex flex-col justify-between items-center py-52 h-full tablet:py-72 laptop:pt-56 laptop:pb-36">
                <div id="question-page-text" class="flex flex-col gap-4 items-center duration-500 scale-0">
                    <h4 id="category" class="text-14 text-center font-semibold text-lightblue"></h4>
                    <h2 id="question" class="text-20 text-center w-full font-semibold tablet:text-32 tablet:w-[656px] laptop:w-9/12 laptop:text-40 desktop:text-48"></h2>
                </div>
                <div id="question-page-button-container" class="flex justify-center w-full duration-500 scale-0">
                    <input id="question-page-button" type="button" value="Se svaret" class="p-4 border-2 rounded-full w-full border-lightblue text-lightblue active:bg-darkblue active:text-white active:border-darkblue tablet:self-center tablet:w-96 laptop:hover:bg-darkblue laptop:hover:border-darkblue laptop:hover:text-white laptop:w-64 laptop:hover:cursor-pointer">
                </div>
            </div>
        </div>

        <!--Start of third page-->
        <div id="answer-page" class="hidden w-full h-full text-white">
            <div class="flex flex-col justify-between items-center py-52 h-full tablet:py-72 laptop:pt-56 laptop:pb-36">
                <div id="answer-page-text" class="flex flex-col gap-4 w-full items-center duration-500 scale-0">
                    <h4 class="text-14 text-center font-semibold">Rätt svar</h4>
                    <h2 id="answer" class="text-green text-center text-28 tablet:text-36 laptop:w-9/12 laptop:text-48 font-semibold"></h2>
                </div>
                <div id="answer-page-button-container" class="flex w-full flex-col gap-4 items-center duration-500 scale-0 laptop:gap-8">
                    <h4 class="text-14 text-semibold text-center laptop:mt-0">Svarade du rätt?</h4>
                    <div class="flex flex-col gap-4 w-full tablet:w-2/3 laptop:flex-row laptop:justify-center">
                        <input id="answer-page-button-yes"type="button" value="Ja" class="p-4 border-2 rounded-full border-white active:bg-darkblue active:border-darkblue tablet:self-center tablet:w-96 laptop:hover:bg-darkblue laptop:hover:border-darkblue laptop:hover:text-white laptop:w-64 laptop:hover:cursor-pointer">
                        <input id="answer-page-button-no" type="button" value="Nej" class="p-4 border-2 rounded-full border-white active:bg-darkblue active:border-darkblue tablet:self-center tablet:w-96 laptop:hover:bg-darkblue laptop:hover:border-darkblue laptop:hover:text-white laptop:w-64 laptop:hover:cursor-pointer">
                    </div>
                </div>
            </div>
        </div>

        <!--Start of last page-->
        <div id="result-page" class="hidden bg-white text-darkblue">
            <div class="flex flex-col pt-40 items-center gap-4 tablet:pt-64 laptop:pt-42">
                <div id="result-page-text" class="flex flex-col items-center duration-500 scale-0">
                    <h4 class="hidden text-14 font-semibold tablet:block">Ditt resultat</h4>
                    <h2 id="total-result" class="text-24 font-semibold tablet:text-48"></h2>
                </div>
                <div id="result-page-blobs" class="flex flex-row w-72 justify-center gap-2 flex-wrap duration-500 scale-0 tablet:w-96 tablet:mb-4 laptop:w-fit"> 
                    <div class="flex flex-col align-center gap-1 laptop:w-24 laptop:gap-4">
                        <ul id="mov-blobs" class="flex flex-row w-full justify-center gap-4 -order-1 laptop:flex-col-reverse laptop:w-fit laptop:-order-3 laptop:self-center">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <h4 class="w-full text-center -order-2">Film & TV</h4>
                    </div>
                    <div class="flex flex-col align-center gap-1 laptop:w-24 laptop:gap-4">
                        <ul class="flex flex-row w-full justify-center gap-4 -order-1 laptop:flex-col-reverse laptop:w-fit laptop:-order-3 laptop:self-center">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <h4 class="w-full text-center -order-2">Geografi</h4>
                    </div>
                    <div class="flex flex-col align-center gap-1 laptop:w-24 laptop:gap-4">
                        <ul class="flex flex-row w-full justify-center gap-4 -order-1 laptop:flex-col-reverse laptop:w-fit laptop:-order-3 laptop:self-center">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <h4 class="w-full text-center -order-2">Historia</h4>
                    </div>
                    <div class="flex flex-col align-center gap-1 laptop:w-24 laptop:gap-4">
                        <ul class="flex flex-row w-full justify-center gap-4 -order-1 laptop:flex-col-reverse laptop:w-fit laptop:-order-3 laptop:self-center">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <h4 class="w-full text-center -order-2">Musik</h4>
                    </div>
                    <div class="flex flex-col align-center gap-1 laptop:w-24 laptop:gap-4">
                        <ul class="flex flex-row w-full justify-center gap-4 -order-1 laptop:flex-col-reverse laptop:w-fit laptop:-order-3 laptop:self-center">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <h4 class="w-full text-center -order-2">Övrigt</h4>
                    </div>
                    <div class="flex flex-col align-center gap-1 laptop:w-24 laptop:gap-4">
                        <ul class="flex flex-row w-full justify-center gap-4 -order-1 laptop:flex-col-reverse laptop:w-fit laptop:-order-3 laptop:self-center">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <h4 class="w-full text-center -order-2">Vetenskap</h4>
                    </div>
                    <div class="flex flex-col align-center gap-1 laptop:w-24 laptop:gap-4">
                        <ul id="7" class="flex flex-row w-full justify-center gap-4 -order-1 laptop:flex-col-reverse laptop:w-fit laptop:-order-3 laptop:self-center">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <h4 class="w-full text-center -order-2">Sport</h4>
                    </div>
                </div>
                <div id="result-page-button-container" class="flex justify-center w-full duration-500 scale-0">
                    <input id="result-page-button" type="button" value="En runda till" class="w-full p-4 border-2 rounded-full border-lightblue text-lightblue active:bg-darkblue active:text-white active:border-darkblue tablet:self-center tablet:w-96 laptop:hover:bg-darkblue laptop:hover:border-darkblue laptop:hover:text-white laptop:w-64 laptop:hover:cursor-pointer">
                </div>
            </div>
        </div>

        <script type="module" crossorigin src="http://localhost:3000/@@vite/client"></script>
        <script type="module" crossorigin src="http://localhost:3000/resources/js/app.js"></script>
        
    </body>
</html>

