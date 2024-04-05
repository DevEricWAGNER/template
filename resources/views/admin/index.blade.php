<x-app-layout>
    <main>
       <div class="p-4 mx-auto max-w-screen-2xl md:p-6 2xl:p-10">
          <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
             <!-- Card Item Start -->
             <div class="rounded-sm border border-[#17a2b8] bg-[#17a2b8] shadow-default">
                <div class="flex flex-row justify-between px-7.5 py-6">
                   <div class="flex flex-col justify-between">
                      <h4 class="font-bold text-white text-title-xl">
                        {{ $user_count }}
                      </h4>
                      <span class="font-medium text-white text-md">Administrateurs</span>
                   </div>
                   <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="rgba(0,0,0,.15)" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                      <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                      <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                   </svg>
                </div>
                <div class="bg-[rgba(0,0,0,.1)] hover:bg-[rgba(0,0,0,.15)] py-1 text-center text-white">
                   <a href="{{ route('users.index') }}"
                      class="flex items-center justify-center gap-1 text-sm font-medium"
                      >
                      Gestion
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                         <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                      </svg>
                   </a>
                </div>
             </div>
             <!-- Card Item End -->
             <!-- Card Item Start -->
             <div class="rounded-sm border border-[#28a745] bg-[#28a745] shadow-default">
                <div class="flex flex-row justify-between px-7.5 py-6">
                   <div class="flex flex-col justify-between">
                      <h4 class="font-bold text-white text-title-xl">
                         15
                      </h4>
                      <span class="font-medium text-white text-md">Pages Actives</span>
                   </div>
                   <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="rgba(0,0,0,.15)" class="bi bi-file-text" viewBox="0 0 16 16">
                      <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1z"/>
                      <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
                   </svg>
                </div>
                <div class="bg-[rgba(0,0,0,.1)] hover:bg-[rgba(0,0,0,.15)] py-1 text-center text-white">
                   <a href=""
                      class="flex items-center justify-center gap-1 text-sm font-medium"
                      >
                      Gestion
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                         <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                      </svg>
                   </a>
                </div>
             </div>
             <!-- Card Item End -->
             <!-- Card Item Start -->
             <div class="rounded-sm border border-[#ffc107] bg-[#ffc107] shadow-default">
                <div class="flex flex-row justify-between px-7.5 py-6">
                   <div class="flex flex-col justify-between">
                      <h4 class="font-bold text-black text-title-xl">
                         9
                      </h4>
                      <span class="font-medium text-black text-md">Articles dans le blog</span>
                   </div>
                   <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="rgba(0,0,0,.15)" class="bi bi-rss" viewBox="0 0 16 16">
                      <path d="M5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-3-8.5a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10a1 1 0 1 1-2 0 8 8 0 0 0-8-8 1 1 0 0 1-1-1m0 4a1 1 0 0 1 1-1 6 6 0 0 1 6 6 1 1 0 1 1-2 0 4 4 0 0 0-4-4 1 1 0 0 1-1-1"/>
                   </svg>
                </div>
                <div class="bg-[rgba(0,0,0,.1)] hover:bg-[rgba(0,0,0,.15)] py-1 text-center text-white">
                   <a href=""
                      class="flex items-center justify-center gap-1 text-sm font-medium"
                      >
                      Gestion
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                         <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                      </svg>
                   </a>
                </div>
             </div>
             <!-- Card Item End -->
             <!-- Card Item Start -->
             <div class="rounded-sm border border-[#dc3545] bg-[#dc3545] shadow-default">
                <div class="flex flex-row justify-between px-7.5 py-6">
                   <div class="flex flex-col justify-between">
                      <h4 class="font-bold text-white text-title-xl">
                         00
                      </h4>
                      <span class="font-medium text-white text-md">Photos dans la Galerie</span>
                   </div>
                   <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="rgba(0,0,0,.15)" class="bi bi-images" viewBox="0 0 16 16">
                      <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                      <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2M14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1M2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1z"/>
                   </svg>
                </div>
                <div class="bg-[rgba(0,0,0,.1)] hover:bg-[rgba(0,0,0,.15)] py-1 text-center text-white">
                   <a href=""
                      class="flex items-center justify-center gap-1 text-sm font-medium"
                      >
                      Gestion
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                         <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                      </svg>
                   </a>
                </div>
             </div>
             <!-- Card Item End -->
          </div>
          <div
             class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5"
             >
             <!-- ====== Chart One Start -->
             @include('admin.charts.number1')
             <!-- ====== Chart One End -->
             <!-- ====== Chart Two Start -->
             @include('admin.charts.number2')
             <!-- ====== Chart Two End -->
             <!-- ====== Chart Three Start -->
             @include('admin.charts.number3')
             <!-- ====== Chart Three End -->
             <!-- ====== Map One Start -->
             @include('admin.maps.number1')
             <!-- ====== Map One End -->
             <!-- ====== Table One Start -->
             <div class="col-span-12 xl:col-span-8">
                @include("admin.tables.number1")
             </div>
             <!-- ====== Table One End -->
             <!-- ====== Chat Card Start -->
             <div
                class="col-span-12 py-6 bg-white border rounded-sm border-stroke shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4"
                >
                <h4
                   class="mb-6 px-7.5 text-xl font-bold text-black dark:text-white"
                   >
                   Chats
                </h4>
                <div>
                   <a
                      href="messages.html"
                      class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                      >
                      <div class="relative rounded-full h-14 w-14">
                         <img src="./images/user/user-03.png" alt="User" />
                         <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"
                            ></span>
                      </div>
                      <div class="flex items-center justify-between flex-1">
                         <div>
                            <h5 class="font-medium text-black dark:text-white">
                               Devid Heilo
                            </h5>
                            <p>
                               <span
                                  class="text-sm font-medium text-black dark:text-white"
                                  >Hello, how are you?</span
                                  >
                               <span class="text-xs"> . 12 min</span>
                            </p>
                         </div>
                         <div
                            class="flex items-center justify-center w-6 h-6 rounded-full bg-primary"
                            >
                            <span class="text-sm font-medium text-white">3</span>
                         </div>
                      </div>
                   </a>
                   <a
                      href="messages.html"
                      class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                      >
                      <div class="relative rounded-full h-14 w-14">
                         <img src="./images/user/user-04.png" alt="User" />
                         <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"
                            ></span>
                      </div>
                      <div class="flex items-center justify-between flex-1">
                         <div>
                            <h5 class="font-medium">Henry Fisher</h5>
                            <p>
                               <span class="text-sm font-medium"
                                  >I am waiting for you</span
                                  >
                               <span class="text-xs"> . 5:54 PM</span>
                            </p>
                         </div>
                      </div>
                   </a>
                   <a
                      href="messages.html"
                      class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                      >
                      <div class="relative rounded-full h-14 w-14">
                         <img src="./images/user/user-05.png" alt="User" />
                         <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"
                            ></span>
                      </div>
                      <div class="flex items-center justify-between flex-1">
                         <div>
                            <h5 class="font-medium">Wilium Smith</h5>
                            <p>
                               <span class="text-sm font-medium"
                                  >Where are you now?</span
                                  >
                               <span class="text-xs"> . 10:12 PM</span>
                            </p>
                         </div>
                      </div>
                   </a>
                   <a
                      href="messages.html"
                      class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                      >
                      <div class="relative rounded-full h-14 w-14">
                         <img src="./images/user/user-01.png" alt="User" />
                         <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"
                            ></span>
                      </div>
                      <div class="flex items-center justify-between flex-1">
                         <div>
                            <h5 class="font-medium text-black dark:text-white">
                               Henry Deco
                            </h5>
                            <p>
                               <span
                                  class="text-sm font-medium text-black dark:text-white"
                                  >Thank you so much!</span
                                  >
                               <span class="text-xs"> . Sun</span>
                            </p>
                         </div>
                         <div
                            class="flex items-center justify-center w-6 h-6 rounded-full bg-primary"
                            >
                            <span class="text-sm font-medium text-white">2</span>
                         </div>
                      </div>
                   </a>
                   <a
                      href="messages.html"
                      class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                      >
                      <div class="relative rounded-full h-14 w-14">
                         <img src="./images/user/user-02.png" alt="User" />
                         <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-7"
                            ></span>
                      </div>
                      <div class="flex items-center justify-between flex-1">
                         <div>
                            <h5 class="font-medium">Jubin Jack</h5>
                            <p>
                               <span class="text-sm font-medium"
                                  >I really love that!</span
                                  >
                               <span class="text-xs"> . Oct 23</span>
                            </p>
                         </div>
                      </div>
                   </a>
                   <a
                      href="messages.html"
                      class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                      >
                      <div class="relative rounded-full h-14 w-14">
                         <img src="./images/user/user-05.png" alt="User" />
                         <span
                            class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"
                            ></span>
                      </div>
                      <div class="flex items-center justify-between flex-1">
                         <div>
                            <h5 class="font-medium">Wilium Smith</h5>
                            <p>
                               <span class="text-sm font-medium"
                                  >Where are you now?</span
                                  >
                               <span class="text-xs"> . Sep 20</span>
                            </p>
                         </div>
                      </div>
                   </a>
                </div>
             </div>
             <!-- ====== Chat Card End -->
          </div>
       </div>
    </main>
 </x-app-layout>
