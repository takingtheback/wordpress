<?php
function mbs_register_post_type() {
    register_post_type( 'book', [
        'has_archive' => true,
        'labels' => [
            'name'               => '책',
            'singular_name'      => '책',
            'menu_name'          => '책',
            'name_admin_bar'     => '책',
            'add_new'            => '새 책 추가',
            'add_new_item'       => '새 책을 추가합니다',
            'new_item'           => '새 책',
            'edit_item'          => '책 수정',
            'view_item'          => '책 보기',
            'all_items'          => '책 목록',
            'search_items'       => '책 검색',
            'parent_item_colon'  => '상위 책:',
            'not_found'          => '현재 입력한 책이 없습니다.',
            'not_found_in_trash' => '휴지통에 책이 없습니다.',
        ],
        'public' => true,
        'menu_position' => 3,
        // 'menu_icon' => 'dashicons-book',
        // 'menu_icon' => get_template_directory_uri() . '/images/book-solid.svg',
        'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjIwIiB2aWV3Qm94PSIwIDAgMTcuNSAyMCIgd2lkdGg9IjE3LjUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTE3LjUgMTQuMDYyNXYtMTMuMTI1YzAtLjUxOTUzLS40MTc5NjktLjkzNzUtLjkzNzUtLjkzNzVoLTEyLjgxMjVjLTIuMDcwMzEyNSAwLTMuNzUgMS42Nzk2OS0zLjc1IDMuNzV2MTIuNWMwIDIuMDcwMzEgMS42Nzk2ODc1IDMuNzUgMy43NSAzLjc1aDEyLjgxMjVjLjUxOTUzMSAwIC45Mzc1LS40MTc5Ny45Mzc1LS45Mzc1di0uNjI1YzAtLjI5Mjk3LS4xMzY3MTktLjU1ODU5LS4zNDc2NTYtLjczMDQ3LS4xNjQwNjMtLjYwMTU2LS4xNjQwNjMtMi4zMTY0MSAwLTIuOTE3OTcuMjEwOTM3LS4xNjc5Ny4zNDc2NTYtLjQzMzU5LjM0NzY1Ni0uNzI2NTZ6bS0xMi41LTguODI4MTNjMC0uMTI4OS4xMDU0Njg3LS4yMzQzNy4yMzQzNzUtLjIzNDM3aDguMjgxMjVjLjEyODkwNiAwIC4yMzQzNzUuMTA1NDcuMjM0Mzc1LjIzNDM3di43ODEyNWMwIC4xMjg5MS0uMTA1NDY5LjIzNDM4LS4yMzQzNzUuMjM0MzhoLTguMjgxMjVjLS4xMjg5MDYzIDAtLjIzNDM3NS0uMTA1NDctLjIzNDM3NS0uMjM0Mzh6bTAgMi41YzAtLjEyODkuMTA1NDY4Ny0uMjM0MzcuMjM0Mzc1LS4yMzQzN2g4LjI4MTI1Yy4xMjg5MDYgMCAuMjM0Mzc1LjEwNTQ3LjIzNDM3NS4yMzQzN3YuNzgxMjVjMCAuMTI4OTEtLjEwNTQ2OS4yMzQzOC0uMjM0Mzc1LjIzNDM4aC04LjI4MTI1Yy0uMTI4OTA2MyAwLS4yMzQzNzUtLjEwNTQ3LS4yMzQzNzUtLjIzNDM4em05Ljg5ODQzOCA5Ljc2NTYzaC0xMS4xNDg0MzhjLS42OTE0MDYyIDAtMS4yNS0uNTU4NTktMS4yNS0xLjI1IDAtLjY4NzUuNTYyNS0xLjI1IDEuMjUtMS4yNWgxMS4xNDg0MzhjLS4wNzQyMi42Njc5Ny0uMDc0MjIgMS44MzIwMyAwIDIuNXoiIGZpbGw9IiMwMDAiIHN0cm9rZS13aWR0aD0iLjAzOTA2MyIvPjwvc3ZnPg==',
    ] );

}

function secondhand_register_post_type() {
    register_post_type( 'secondhandBook', [
        'has_archive' => true,
        'labels' => [
        'name'               => '중고책',
        'singular_name'      => '중고책',
        'menu_name'          => '중고책',
        'name_admin_bar'     => '중고책',
        'add_new'            => '새 중고책 추가',
        'add_new_item'       => '새 중고책을 추가합니다',
        'new_item'           => '새 중고책',
        'edit_item'          => '중고책 수정',
        'view_item'          => '중고책 보기',
        'all_items'          => '중고책 목록',
        'search_items'       => '중고책 검색',
        'parent_item_colon'  => '상위 중고책:',
        'not_found'          => '현재 입력한 중고책이 없습니다.',
        'not_found_in_trash' => '휴지통에 중고책이 없습니다.',
        ],
        'public' => true,
        'menu_position' => 3,
//        'menu_icon' => 'dashicons-book',
//        'menu_icon' => get_template_directory_uri() . '/images/book-secondhand.svg',
        'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIyIDE2LjczOTlWNC42Njk5NEMyMiAzLjQ2OTk0IDIxLjAyIDIuNTc5OTQgMTkuODMgMi42Nzk5NEgxOS43N0MxNy42NyAyLjg1OTk0IDE0LjQ4IDMuOTI5OTQgMTIuNyA1LjA0OTk0TDEyLjUzIDUuMTU5OTRDMTIuMjQgNS4zMzk5NCAxMS43NiA1LjMzOTk0IDExLjQ3IDUuMTU5OTRMMTEuMjIgNS4wMDk5NEM5LjQ0IDMuODk5OTQgNi4yNiAyLjgzOTk0IDQuMTYgMi42Njk5NEMyLjk3IDIuNTY5OTQgMiAzLjQ2OTk0IDIgNC42NTk5NFYxNi43Mzk5QzIgMTcuNjk5OSAyLjc4IDE4LjU5OTkgMy43NCAxOC43MTk5TDQuMDMgMTguNzU5OUM2LjIgMTkuMDQ5OSA5LjU1IDIwLjE0OTkgMTEuNDcgMjEuMTk5OUwxMS41MSAyMS4yMTk5QzExLjc4IDIxLjM2OTkgMTIuMjEgMjEuMzY5OSAxMi40NyAyMS4yMTk5QzE0LjM5IDIwLjE1OTkgMTcuNzUgMTkuMDQ5OSAxOS45MyAxOC43NTk5TDIwLjI2IDE4LjcxOTlDMjEuMjIgMTguNTk5OSAyMiAxNy42OTk5IDIyIDE2LjczOTlaIiBzdHJva2U9IiMyOTJEMzIiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTEyIDUuNDg5OTlWMjAuNDkiIHN0cm9rZT0iIzI5MkQzMiIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8cGF0aCBkPSJNNy43NSA4LjQ4OTk5SDUuNSIgc3Ryb2tlPSIjMjkyRDMyIiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik04LjUgMTEuNDlINS41IiBzdHJva2U9IiMyOTJEMzIiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==',
    ]);

}

add_action( 'init', 'mbs_register_post_type' );
add_action( 'init', 'secondhand_register_post_type' );
