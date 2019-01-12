<template>
    <div>
        <div class="all-wrapper">
            <div class="dropdown-wrapper" @click="isActive = !isActive">
                <div class="dropdown-text">
                    {{label}}
                </div>
                <i class="el-icon-caret-bottom"></i>
            </div>
            <transition>
                <div class="list-items" v-if="isActive">
                    <template v-if="existsListItems">
                        <template v-for="(value, key) in listItems">
                            <div class="list-item"
                                 :class="[key == activeItemKey ? 'active' : '' ]"
                                 @click="handleClickItem(key)"
                            >
                                {{value.name}}
                            </div>
                        </template>
                    </template>
                    <template v-else>
                        <div class="list-item">
                            選択肢がありません
                        </div>
                    </template>
                </div>
            </transition>
        </div>
        <div class="dropdown-bg" @click="isActive = false" v-if="isActive"></div>
    </div>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            required: true,
        },
        listItems: {
            type: Object,
            required: true,
        },
        activeItemKey: {
            type: [String, Number],
            required: false,
        },
        action: {
            type: Function,
            required: true,
        },
    },
    data() {
        return {
            isActive: false,
        };
    },
    computed: {
        existsListItems() {
            return !isEmpty(this.listItems);
        },
    },
    methods: {
        handleClickItem(key) {
            if (key == this.activeItemKey) {
                return;
            }
    
            this.isActive = false;
            this.action(key);
        },
    }
}
</script>