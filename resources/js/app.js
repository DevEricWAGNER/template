import "jsvectormap/dist/css/jsvectormap.css";
import "flatpickr/dist/flatpickr.min.css";

import './bootstrap';
import './darkmode';
import './matomo';

import 'flowbite';

import Alpine from "alpinejs";
import persist from "@alpinejs/persist";
import flatpickr from "flatpickr";
import chart01 from "./components/chart-01";
import chart02 from "./components/chart-02";
import chart03 from "./components/chart-03";
import chart04 from "./components/chart-04";
import map01 from "./components/map-01";

import CryptoJS from 'crypto-js';
import Cookies from 'js-cookie';

if (window.location.pathname != "/controlpanel/login" && window.location.pathname != "/controlpanel/register") {

let edit_project = document.getElementById('edit_project');
edit_project.innerHTML = `<option selected disabled>Choisissez un Projet</option><option disabled>▬▬▬▬▬▬▬▬▬▬▬▬</option>`;

$.ajax({
    url: '/controlpanel/projects',
    type: 'GET',
    success: function(response) {
        let projects = response;

        projects.forEach(project => {
            if (Cookies.get('project_id')) {
                let bytes  = CryptoJS.AES.decrypt(Cookies.get('project_id'), 'secret key 123');
                let originalValue = bytes.toString(CryptoJS.enc.Utf8);
                if (project.id == originalValue) {
                    edit_project.innerHTML += `<option value="${project.id}" selected>${project.siteName}</option>`;
                } else {
                    edit_project.innerHTML += `<option value="${project.id}">${project.siteName}</option>`;
                }
            } else {
                edit_project.innerHTML += `<option value="${project.id}">${project.siteName}</option>`;
            }
        });
    }
});

let gest_project_link = document.getElementById('gest_project_link');
function ActualiserLienGestionProjet() {
    if (Cookies.get('project_id')) {
        gest_project_link.innerHTML = `
        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4" href="/controlpanel/project">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0
            1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
            </svg>
            Gestion du Projet
        </a>
        `;
    } else {
        gest_project_link.innerHTML = `
        <a class="group relative cursor-not-allowed flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark-1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4" disabled>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0
            1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
            </svg>
            Gestion du Projet
        </a>
        `;
    }
}

ActualiserLienGestionProjet();

edit_project.addEventListener('change', function() {
    let project_id = this.value;

    // Encrypt project_id
    let ciphertext = CryptoJS.AES.encrypt(project_id, 'secret key 123').toString();

    // Set encrypted project_id as a cookie
    Cookies.set('project_id', ciphertext);
    ActualiserLienGestionProjet();
});
























    if (Cookies.get('project_id') && window.location.pathname === "/controlpanel/project") {
        const uploadInput = document.getElementById('siteLogo');
        const filenameLabel = document.getElementById('filename');
        const imagePreview = document.getElementById('image-preview');

        let cryptedProjectId = CryptoJS.AES.decrypt(Cookies.get('project_id'), 'secret key 123');
        let project_id = cryptedProjectId.toString(CryptoJS.enc.Utf8);
        $('#project_id_input').val(project_id);
        let siteName = $('#siteName');
        let siteAuthor = $('#siteAuthor');
        let sitePhoneNumber = $('#sitePhoneNumber');
        let siteCopyright = $('#siteCopyright');
        let siteAdress = $('#siteAdress');
        let siteKeywords = $('#siteKeywords');
        let siteDescription = $('#siteDescription');
        let siteAdditional_metatags = $('#siteAdditional_metatags');

        $.ajax({
            url: '/controlpanel/project/' + project_id,
            type: 'GET',
            success: function(response) {
                siteName.val(response.siteName);
                siteAuthor.val(response.siteAuthor);
                sitePhoneNumber.val(response.sitePhoneNumber);
                siteCopyright.val(response.siteCopyright);
                siteAdress.val(response.siteAdress);
                siteKeywords.val(response.siteKeywords);
                siteDescription.val(response.siteDescription);
                siteAdditional_metatags.val(response.siteAdditional_metatags);

                console.log('/storage/' + project_id + '/' + response.siteLogo)
                if (response.siteLogo != "") {
                    imagePreview.classList.remove('p-6');
                    imagePreview.innerHTML = '<img src="/storage/' + project_id + '/' + response.siteLogo + '" class="mx-auto rounded-lg max-h-48" alt="Image preview" />';
                    imagePreview.classList.remove('border-dashed', 'border-2', 'border-gray-400');


                    imagePreview.addEventListener('click', () => {
                        uploadInput.click();
                    });
                } else {
                    imagePreview.classList.add('p-6');
                    imagePreview.innerHTML = `<div class="flex items-center justify-center text-gray-500 bg-gray-200 rounded-lg">No image preview</div>`;
                    imagePreview.classList.add('border-dashed', 'border-2', 'border-gray-400');
                }

            }
        });
        let isEventListenerAdded = false;

        uploadInput.addEventListener('change', (event) => {
            const file = event.target.files[0];

            if (file) {
                filenameLabel.textContent = file.name;

                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.classList.remove('p-6');
                    imagePreview.innerHTML =
                        `<img src="${e.target.result}" class="mx-auto rounded-lg max-h-48" alt="Image preview" />`;
                    imagePreview.classList.remove('border-dashed', 'border-2', 'border-gray-400');

                    if (!isEventListenerAdded) {
                        imagePreview.addEventListener('click', () => {
                            uploadInput.click();
                        });
                        isEventListenerAdded = true;
                    }
                };
                reader.readAsDataURL(file);
            } else {
                imagePreview.classList.add('p-6');
                imagePreview.innerHTML =
                    `<div class="flex items-center justify-center text-gray-500 bg-gray-200 rounded-lg">No image preview</div>`;
                imagePreview.classList.add('border-dashed', 'border-2', 'border-gray-400');

                imagePreview.removeEventListener('click', () => {
                    uploadInput.click();
                });

                isEventListenerAdded = false;
            }
        });

        uploadInput.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    }



















































}



Alpine.plugin(persist);
window.Alpine = Alpine;
Alpine.start();

// Init flatpickr
flatpickr(".datepicker", {
  mode: "range",
  static: true,
  monthSelectorType: "static",
  dateFormat: "M j, Y",
  defaultDate: [new Date().setDate(new Date().getDate() - 6), new Date()],
  prevArrow:
    '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
  nextArrow:
    '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',
  onReady: (selectedDates, dateStr, instance) => {
    // eslint-disable-next-line no-param-reassign
    instance.element.value = dateStr.replace("to", "-");
    const customClass = instance.element.getAttribute("data-class");
    instance.calendarContainer.classList.add(customClass);
  },
  onChange: (selectedDates, dateStr, instance) => {
    // eslint-disable-next-line no-param-reassign
    instance.element.value = dateStr.replace("to", "-");
  },
});

flatpickr(".form-datepicker", {
  mode: "single",
  static: true,
  monthSelectorType: "static",
  dateFormat: "M j, Y",
  prevArrow:
    '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
  nextArrow:
    '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',
});

// Document Loaded
document.addEventListener("DOMContentLoaded", () => {
  chart01();
  chart02();
  chart03();
  chart04();
  map01();
});
