

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

const observer = new IntersectionObserver((entries, observer) => {
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

function chuyenTrang(nextSection) {
  // Ẩn tất cả các phần
  document.getElementById("nhap-thong-tin").classList.add("hidden");
  document.getElementById("hoa-don").classList.add("hidden");

  // Hiển thị phần tiếp theo
  document.getElementById(nextSection).classList.remove("hidden");
  // Lấy các phần tử cần thay đổi
  const step1 = document.getElementById("step1");
  const step2 = document.getElementById("step2");

  // Lấy nội dung và lớp CSS của từng phần tử
  const step1Content = step1.innerHTML;
  const step1Class = step1.className;
  const step2Content = "1";
  const step2Class = step2.className;

  // Thay đổi nội dung và lớp CSS giữa hai phần tử
  step1.innerHTML = step2Content;
  step1.className = step2Class;
  step2.innerHTML = step1Content;
  step2.className = step1Class;
}

function handleSubmitAndChangeContent(event) {
  // Gọi hàm xử lý form
  submitForm();

  // Gọi hàm thay đổi nội dung giữa các phần tử
  document.getElementById("thanhtoan").classList.add("hidden");
  document.getElementById("nhap-thong-tin").classList.add("hidden");
  document.getElementById("hoa-don").classList.remove("hidden");
  const step1 = document.getElementById("step1");
  const step2 = document.getElementById("step2");
  const step1Content = step1.innerHTML;
  const step1Class = step1.className;
  const step2Content = "1"; // Nội dung mới
  const step2Class = step2.className;

  step1.innerHTML = step2Content;
  step1.className = step2Class;
  step2.innerHTML = step1Content;
  step2.className = step1Class;

  // Ngăn chặn sự kiện mặc định của form submit
  event.preventDefault();
}

// Lắng nghe sự kiện submit của form
// document.getElementById("thanhtoan").addEventListener("submit",  function (nextSection) {
//     // Ẩn tất cả các phần
//     document.getElementById("nhap-thong-tin").classList.add("hidden");
//     document.getElementById("hoa-don").classList.add("hidden");

//     // Hiển thị phần tiếp theo
//     document.getElementById(nextSection).classList.remove("hidden");
//     // Lấy các phần tử cần thay đổi
//     const step1 = document.getElementById("step1");
//     const step2 = document.getElementById("step2");

//     // Lấy nội dung và lớp CSS của từng phần tử
//     const step1Content = step1.innerHTML;
//     const step1Class = step1.className;
//     const step2Content = "1";
//     const step2Class = step2.className;

//     // Thay đổi nội dung và lớp CSS giữa hai phần tử
//     step1.innerHTML = step2Content;
//     step1.className = step2Class;
//     step2.innerHTML = step1Content;
//     step2.className = step1Class;
//   }
// );

function submitForm() {
  // Lấy giá trị từ trường input trong form
  var inputValue = document.getElementById("hoten").value;

  // Hiển thị giá trị trong div bên ngoài form
  var resultDiv = document.getElementById("hotenn");
  resultDiv.innerHTML = inputValue;
}
