@csrf
<!-- component -->
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
        <div class="mb-5">
          <label
            for="artist_name"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            アーティスト名
          </label>
          <input
            type="text"
            name="artist_name"
            value="{{ old('artist_name', $post->artist_name) }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for="track_name"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            曲名
          </label>
          <input
            type="text"
            name="track_name"
            value="{{ old('track_name', $post->track_name) }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
            <label
              for="track_name"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              アルバム名
            </label>
            <input
              type="text"
              name="album_name"
              value="{{ old('album_name', $post->album_name) }}"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        <div class="mb-5">
          <label
            for="label"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            レーベル名
          </label>
          <input
            type="text"
            name="label"
            value="{{ old('label', $post->label) }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
            <label
              for="year"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              リリース年
            </label>
            <input
              type="text"
              name="year"
              value="{{ old('year', $post->year) }}"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        <div class="mb-5">
          <label
            for="content"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            コンテンツ
          </label>
          <textarea
            cols="30"
            rows="10"
            name="content"
            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          >{{ old('content', $post->content) }}</textarea>
        </div>
    </div>
  </div>

