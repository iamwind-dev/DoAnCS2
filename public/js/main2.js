var selectElement = document.getElementById("select1");
var hiddenField1 = document.getElementById("hiddenField1");
var hiddenField2 = document.getElementById("hiddenField2");

// Lấy giá trị của tùy chọn đầu tiên khi trang được tải
var selectedValue = selectElement.options[selectElement.selectedIndex].value;

// Phân tách giá trị thành hai phần dựa trên dấu gạch ngang
var parts = selectedValue.split("-");
var value1 = parts[0];
var value2 = parts[1];

// Gán giá trị vào các trường ẩn trong form
hiddenField1.value = value1;
hiddenField2.value = value2;

// Thêm sự kiện để lắng nghe sự thay đổi trong select
selectElement.addEventListener("change", function () {
  // Lấy giá trị của tùy chọn được chọn
  var selectedValue = selectElement.options[selectElement.selectedIndex].value;

  // Phân tách giá trị thành hai phần dựa trên dấu gạch ngang
  var parts = selectedValue.split("-");
  var diadiem = parts[0];
  var iddiadiem = parts[1];

  // Gán giá trị vào các trường ẩn trong form
  hiddenField1.value = diadiem;
  hiddenField2.value = iddiadiem;
});

//SELECT IMG
const selectImage = document.querySelector(".select-image");
const inputFile = document.querySelector("#file");
const imgArea = document.querySelector(".img-area");

selectImage.addEventListener("click", function () {
  inputFile.click();
});

inputFile.addEventListener("change", function () {
  const image = this.files[0];
  if (image.size < 2000000) {
    const reader = new FileReader();
    reader.onload = () => {
      const allImg = imgArea.querySelectorAll("img");
      allImg.forEach((item) => item.remove());
      const imgUrl = reader.result;
      const img = document.createElement("img");
      img.src = imgUrl;
      imgArea.appendChild(img);
      imgArea.classList.add("active");
      imgArea.dataset.img = image.name;
    };
    reader.readAsDataURL(image);
  } else {
    alert("Image size more than 2MB");
  }
});

var input = document.querySelector(".input-box");
input.onclick = function () {
  this.classList.toggle("open");
  let list = this.nextElementSibling;
  if (list.style.maxHeight) {
    list.style.maxHeight = null;
    list.style.boxShadow = null;
  } else {
    list.style.maxHeight = list.scrollHeight + "px";
    list.style.boxShadow =
      "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
  }
};

var rad = document.querySelectorAll(".radio");
rad.forEach((item) => {
  item.addEventListener("change", () => {
    input.innerHTML = item.nextElementSibling.innerHTML;
    input.click();
  });
});

/*--------------------------------------------------
  11. Lazy loading
---------------------------------------------------*/
const imageElements = document.querySelectorAll(".lazy");

const observer = new IntersectionObserver((entries, observer)=>{
  entries.forEach((entry) => {
  if (entry.isIntersecting) {
    entry.target.src = entry.target.dataset.src;
    observer.unobserve(entry.target);
  }
  });
});

imageElements.forEach((image) => {
  observer.observe(image);
});