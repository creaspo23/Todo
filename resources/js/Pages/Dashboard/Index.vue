<template>
  <layout>
    <div class="mx-auto w-full">
      <div>
        <!-- Card stats -->
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/4 px-4">
            <div
              class="
                relative
                flex flex-col
                min-w-0
                break-words
                bg-white
                rounded
                mb-6
                xl:mb-0
                shadow-lg
              "
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <h5 class="text-gray-500 uppercase font-bold text-xs">
                      رصيد البضائع
                    </h5>
                    <span class="font-semibold text-xl text-gray-800">
                      22,0
                    </span>
                  </div>
                  <div class="relative w-auto px-2 flex-initial">
                    <div
                      class="
                        text-white
                        p-3
                        text-center
                        inline-flex
                        items-center
                        justify-center
                        w-12
                        h-12
                        shadow-lg
                        rounded-full
                        bg-orange-500
                      "
                    >
                      <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-gray-500 mt-4">
                  <span class="text-red-500 mr-2">
                    <i class="fas fa-arrow-down"></i> 3.48%
                  </span>
                  <span class="whitespace-no-wrap"> Since last week </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/4 px-4">
            <div
              class="
                relative
                flex flex-col
                min-w-0
                break-words
                bg-white
                rounded
                mb-6
                xl:mb-0
                shadow-lg
              "
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <h5 class="text-gray-500 uppercase font-bold text-xs">
                      إجمالي النقد
                    </h5>
                    <span class="font-semibold text-xl text-gray-800">
                      15,000
                    </span>
                  </div>
                  <div class="relative w-auto px-2 flex-initial">
                    <div
                      class="
                        text-white
                        p-3
                        text-center
                        inline-flex
                        items-center
                        justify-center
                        w-12
                        h-12
                        shadow-lg
                        rounded-full
                        bg-pink-500
                      "
                    >
                      <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-gray-500 mt-4">
                  <span class="text-orange-500 mr-2">
                    <i class="fas fa-arrow-down"></i> 1.10%
                  </span>
                  <span class="whitespace-no-wrap"> Since yesterday </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/4 px-4">
            <div
              class="
                relative
                flex flex-col
                min-w-0
                break-words
                bg-white
                rounded
                mb-6
                xl:mb-0
                shadow-lg
              "
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <h5 class="text-gray-500 uppercase font-bold text-xs">
                      التكلفه الإجمالية
                    </h5>
                    <span class="font-semibold text-xl text-gray-800">
                      49,65%
                    </span>
                  </div>
                  <div class="relative w-auto px-2 flex-initial">
                    <div
                      class="
                        text-white
                        p-3
                        text-center
                        inline-flex
                        items-center
                        justify-center
                        w-12
                        h-12
                        shadow-lg
                        rounded-full
                        bg-blue-500
                      "
                    >
                      <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-gray-500 mt-4">
                  <span class="text-green-500 mr-2">
                    <i class="fas fa-arrow-up"></i> 12%
                  </span>
                  <span class="whitespace-no-wrap"> Since last month </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/4 px-4">
            <div
              class="
                relative
                flex flex-col
                min-w-0
                break-words
                bg-white
                rounded
                mb-6
                xl:mb-0
                shadow-lg
              "
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <h5 class="text-gray-500 uppercase font-bold text-xs">
                      إجمالي المبيعات
                    </h5>
                    <span class="font-semibold text-xl text-gray-800">
                      22,0
                    </span>
                  </div>
                  <div class="relative w-auto px-2 flex-initial">
                    <div
                      class="
                        text-white
                        p-3
                        text-center
                        inline-flex
                        items-center
                        justify-center
                        w-12
                        h-12
                        shadow-lg
                        rounded-full
                        bg-orange-500
                      "
                    >
                      <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-gray-500 mt-4">
                  <span class="text-red-500 mr-2">
                    <i class="fas fa-arrow-down"></i> 3.48%
                  </span>
                  <span class="whitespace-no-wrap"> Since last week </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-12">
      <div>
        <!-- Card stats -->
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/4 px-4">
            <div
              class="
                relative
                flex flex-col
                min-w-0
                break-words
                bg-white
                rounded
                mb-6
                xl:mb-0
                shadow-lg
              "
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
<scatter-chart :data="[[174.0, 80.0], [176.5, 82.3]]" xtitle="Size" ytitle="Population"></scatter-chart>
                  </div>
             
                </div>
          
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/4 px-4">
            <div
              class="
                relative
                flex flex-col
                min-w-0
                break-words
                bg-white
                rounded
                mb-6
                xl:mb-0
                shadow-lg
              "
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <line-chart :data="data" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/4 px-4">
            <div
              class="
                relative
                flex flex-col
                min-w-0
                break-words
                bg-white
                rounded
                mb-6
                xl:mb-0
                shadow-lg
              "
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <pie-chart
                      :data="[
                        ['Blueberry', 44],
                        ['Strawberry', 23],
                      ]"
                    ></pie-chart>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/4 px-4">
            <div
              class="
                relative
                flex flex-col
                min-w-0
                break-words
                bg-white
                rounded
                mb-6
                xl:mb-0
                shadow-lg
              "
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <column-chart
                      :data="[
                        ['Sun', 32],
                        ['Mon', 46],
                        ['Tue', 28],
                      ]"
                    ></column-chart>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


        <div class="mt-12">
      <div>
        <!-- Card stats -->
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/2 px-4">
            <div
              class="
                relative
                flex flex-col
                min-w-0
                break-words
                bg-white
                rounded
                mb-6
                xl:mb-0
                shadow-lg
              "
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
<bar-chart :data="[['X-Small', 5], ['Small', 27]]" ></bar-chart>
                  </div>
             
                </div>
          
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 px-4">
            <div
              class="
                relative
                flex flex-col
                min-w-0
                break-words
                bg-white
                rounded
                mb-6
                xl:mb-0
                shadow-lg
              "
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                 <column-chart :data="[['Sun', 32], ['Mon', 46], ['Tue', 28]]"></column-chart>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
        </div>
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from "../../Shared/Layout";

export default {
  components: { Layout },
  data() {
      return {
          data: [
  {name: 'Workout', data: {'2017-01-01 00:00:00 -0800': 3, '2017-01-02 00:00:00 -0800': 4}},
  {name: 'Call parents', data: {'2017-01-01 00:00:00 -0800': 5, '2017-01-02 00:00:00 -0800': 3}}
]
      
  };
  }
}

</script>

 
