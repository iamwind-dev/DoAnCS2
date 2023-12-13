<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>See more with Animation</title>
    <style>
        .content {
            max-height: 100px;
            /* Chiều cao tối đa ban đầu */
            overflow: hidden;
            /* Ẩn phần nội dung vượt quá chiều cao tối đa */
            transition: max-height 0.3s ease-out;
            /* Hiệu ứng khi mở rộng nội dung */
        }

        .showContent {
            max-height: 500px;
            /* Chiều cao tối đa khi mở rộng toàn bộ nội dung */
            transition: max-height 0.5s ease-in-out;
            /* Hiệu ứng khi mở rộng */
            animation-name: fadeIn;
            animation-duration: 0.5s;
        }

        .seeMoreBtn {
            cursor: pointer;
            color: blue;
            transition: color 0.3s ease;
            /* Hiệu ứng khi hover vào nút */
        }

        .seeMoreBtn:hover {
            color: darkblue;
            /* Màu sắc khi hover vào nút */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="content">
        <!-- Phần nội dung được hiển thị ban đầu -->
        <p>Đây là một phần của nội dung... Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos sit necessitatibus fugit maiores hic magni, eveniet totam mollitia consequatur fugiat. Amet ratione incidunt saepe nulla aliquam officia fugit temporibus sapiente!Lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, architecto distinctio quidem ea vero quos ab ad officia hic, aliquam veniam iusto omnis eum eius quas deserunt tempora nam exercitationem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum assumenda ratione obcaecati saepe? Voluptatibus nam, odit fugit laboriosam ad doloremque ut quae aliquam expedita veniam provident suscipit! Optio, eius praesentium. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate molestias unde quia nobis vitae saepe suscipit perspiciatis sequi esse consequatur? Nulla, porro. Voluptatibus velit consectetur quia aut repellendus fuga magni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nam sit quo, explicabo dolores aspernatur impedit perspiciatis quasi non deleniti, velit earum debitis modi id sapiente adipisci praesentium eligendi nulla?</p>
    </div>
    <div class="seeMoreBtn">See more</div>

    <script>
        document.querySelector('.seeMoreBtn').addEventListener('click', function () {
            const content = document.querySelector('.content');
            content.classList.toggle('showContent'); // Thêm hoặc xóa lớp showContent để hiển thị hoặc ẩn nội dung
            this.innerText = content.classList.contains('showContent') ? 'See less' : 'See more'; // Thay đổi văn bản của nút
        });
    </script>
</body>

</html>