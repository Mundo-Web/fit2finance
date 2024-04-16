import './bootstrap';

// Import Chart.js
import { Chart } from 'chart.js';

// Import flatpickr
import flatpickr from 'flatpickr';

// Import Sweetaler2

// Import AOS
import 'aos/dist/aos.css'
import Aos from 'aos';
Aos.init();

// import component from './components/component';
import dashboardCard01 from './components/dashboard-card-01';
import dashboardCard02 from './components/dashboard-card-02';
import dashboardCard03 from './components/dashboard-card-03';
import dashboardCard04 from './components/dashboard-card-04';
import dashboardCard05 from './components/dashboard-card-05';
import dashboardCard06 from './components/dashboard-card-06';
import dashboardCard08 from './components/dashboard-card-08';
import dashboardCard09 from './components/dashboard-card-09';
import dashboardCard11 from './components/dashboard-card-11';

// Define Chart.js default settings
/* eslint-disable prefer-destructuring */
Chart.defaults.font.family = '"Inter", sans-serif';
Chart.defaults.font.weight = '500';
Chart.defaults.plugins.tooltip.borderWidth = 1;
Chart.defaults.plugins.tooltip.displayColors = false;
Chart.defaults.plugins.tooltip.mode = 'nearest';
Chart.defaults.plugins.tooltip.intersect = false;
Chart.defaults.plugins.tooltip.position = 'nearest';
Chart.defaults.plugins.tooltip.caretSize = 0;
Chart.defaults.plugins.tooltip.caretPadding = 20;
Chart.defaults.plugins.tooltip.cornerRadius = 4;
Chart.defaults.plugins.tooltip.padding = 8;



// Register Chart.js plugin to add a bg option for chart area
Chart.register({
  id: 'chartAreaPlugin',
  // eslint-disable-next-line object-shorthand
  beforeDraw: (chart) => {
    if (chart.config.options.chartArea && chart.config.options.chartArea.backgroundColor) {
      const ctx = chart.canvas.getContext('2d');
      const { chartArea } = chart;
      ctx.save();
      ctx.fillStyle = chart.config.options.chartArea.backgroundColor;
      // eslint-disable-next-line max-len
      ctx.fillRect(chartArea.left, chartArea.top, chartArea.right - chartArea.left, chartArea.bottom - chartArea.top);
      ctx.restore();
    }
  },
});

document.addEventListener('DOMContentLoaded', () => {
  // Light switcher
  const lightSwitches = document.querySelectorAll('.light-switch');
  if (lightSwitches.length > 0) {
    lightSwitches.forEach((lightSwitch, i) => {
      if (localStorage.getItem('dark-mode') === 'true') {
        lightSwitch.checked = true;
      }
      lightSwitch.addEventListener('change', () => {
        const { checked } = lightSwitch;
        lightSwitches.forEach((el, n) => {
          if (n !== i) {
            el.checked = checked;
          }
        });
        document.documentElement.classList.add('[&_*]:!transition-none');
        if (lightSwitch.checked) {
          document.documentElement.classList.add('dark');
          document.querySelector('html').style.colorScheme = 'dark';
          localStorage.setItem('dark-mode', true);
          document.dispatchEvent(new CustomEvent('darkMode', { detail: { mode: 'on' } }));
        } else {
          document.documentElement.classList.remove('dark');
          document.querySelector('html').style.colorScheme = 'light';
          localStorage.setItem('dark-mode', false);
          document.dispatchEvent(new CustomEvent('darkMode', { detail: { mode: 'off' } }));
        }
        setTimeout(() => {
          document.documentElement.classList.remove('[&_*]:!transition-none');
        }, 1);
      });
    });
  }
  // Flatpickr
  flatpickr('.datepicker', {
    mode: 'range',
    static: true,
    monthSelectorType: 'static',
    dateFormat: 'M j, Y',
    defaultDate: [new Date().setDate(new Date().getDate() - 6), new Date()],
    prevArrow: '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
    nextArrow: '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',
    onReady: (selectedDates, dateStr, instance) => {
      // eslint-disable-next-line no-param-reassign
      instance.element.value = dateStr.replace('to', '-');
      const customClass = instance.element.getAttribute('data-class');
      instance.calendarContainer.classList.add(customClass);
    },
    onChange: (selectedDates, dateStr, instance) => {
      // eslint-disable-next-line no-param-reassign
      instance.element.value = dateStr.replace('to', '-');
    },
  });
  
  dashboardCard01();
  dashboardCard02();
  dashboardCard03();
  dashboardCard04();
  dashboardCard05();
  dashboardCard06();
  dashboardCard08();
  dashboardCard09();
  dashboardCard11();
});


/* CODIGO PARA YEPADVISORS */

const wealth = document.getElementById("wealth");
const finanzas = document.getElementById("finanzas");
const estructuracion = document.getElementById("estructuracion");
const services = document.querySelectorAll(".services");
const imagesServicios = document.querySelectorAll(".images-servicios");


console.log(wealth);
/*  */

const flechaWeath = document.querySelector(".flecha-weath");
const flechaFinanzas = document.querySelector(".flecha-finanzas");
const flechaEstructura = document.querySelector(".flecha-estructura");

// Clases a agregar y quitar
const addClasses = [
  "text-colorSubtitleLittle",
  "font-semibold",
  "text-littleTitle",
];
const removeClasses = [
  "font-regular",
  "text-regularSize",
  "text-colorSubtitleLittle",
  "font-semibold",
  "text-littleTitle",
];

document.addEventListener("DOMContentLoaded", () => {
  flechaFinanzas.classList.add("hidden");
  flechaEstructura.classList.add("hidden");
});

loadEventListeners();

function loadEventListeners() {
  wealth.addEventListener("click", showWealthManagement);
  finanzas.addEventListener("click", showFinanzas);
  estructuracion.addEventListener("click", showEstructuras);
}

function showFinanzas() {
  console.log("finanzas");

  services[0].classList.add("hidden");
  services[1].classList.remove("hidden");
  services[2].classList.add("hidden");

  imagesServicios[0].classList.add("hidden");
  imagesServicios[1].classList.remove("hidden");
  imagesServicios[2].classList.add("hidden");

  flechaWeath.classList.add("hidden");
  flechaFinanzas.classList.remove("hidden");
  flechaEstructura.classList.add("hidden");

  updateElementClasses(finanzas, addClasses, removeClasses);
  deleteElementClasses(wealth, estructuracion);
}

function showWealthManagement() {
  console.log("wealth");

  services[0].classList.remove("hidden");
  services[1].classList.add("hidden");
  services[2].classList.add("hidden");

  imagesServicios[0].classList.remove("hidden");
  imagesServicios[1].classList.add("hidden");
  imagesServicios[2].classList.add("hidden");

  flechaEstructura.classList.add("hidden");
  flechaWeath.classList.remove("hidden");
  flechaFinanzas.classList.add("hidden");

  updateElementClasses(wealth, addClasses, removeClasses);
  deleteElementClasses(finanzas, estructuracion);
}

function showEstructuras() {
  console.log("estructuras");

  services[0].classList.add("hidden");
  services[1].classList.add("hidden");
  services[2].classList.remove("hidden");

  imagesServicios[0].classList.add("hidden");
  imagesServicios[1].classList.add("hidden");
  imagesServicios[2].classList.remove("hidden");

  flechaEstructura.classList.remove("hidden");
  flechaWeath.classList.add("hidden");
  flechaFinanzas.classList.add("hidden");

  // Llamar a la función para actualizar las clases
  updateElementClasses(estructuracion, addClasses, removeClasses);
  deleteElementClasses(finanzas, wealth);
}

function updateElementClasses(element, addClasses, removeClasses) {
  element.classList.remove(...removeClasses);
  element.classList.add(...addClasses);
}

function deleteElementClasses(elementFinanza, elementWealth) {
  elementFinanza.classList.remove(...addClasses);
  elementWealth.classList.remove(...addClasses);
}

function show() {
  document.querySelector(".hamburger").classList.toggle("open");
  document.querySelector(".navigation").classList.toggle("active");
}
