<template>
    <v-container>
        <v-layout align-center justify-center column>
            <infoCard :title="title" :description="description" :image="image"></infoCard>
        </v-layout>
    </v-container>
</template>

<script>
    // import {mapActions, mapMutations, mapState} from "vuex";
    import infoCard from "../components/info-card";

    export default {
        props:["title","description","image"],
        components: {
            infoCard
        },
        watch: {
            // ...mapActions({
            //     search: 'accounting/search'
            // })
        },
        methods: {
            // ...mapActions({
            //     onSearchAutocompleteSelected: 'accounting/onSearchAutocompleteSelected',
            //     onFromDateSelect: 'accounting/onFromDateSelect',
            //     onToDateSelect: 'accounting/onToDateSelect'
            // }),
            // ...mapMutations({
            //     setWindowHeight: 'setWindowHeight',
            //     setSelectedUser: 'setSelectedUser'
            // })
        },
        computed: {
            // ...mapState({
            //     accountingTypes: state => state.accounting.accountingTypes,
            //     accountingDebtorCreditorTypes: state => state.accounting.accountingDebtorCreditorTypes,
            //     users: state => state.accounting.users,
            //     isLoading: state => state.accounting.isLoading,
            //     selected_user: state => state.accounting.selected_user,
            //     windowHeight: state => state.windowHeight,
            //     windowWidth: state => state.windowWidth,
            //     tableItems: state => state.accounting.tableItems,
            //     sum: state => state.accounting.sum,
            //     from_date: state => state.accounting.from_date,
            //     to_date: state => state.accounting.to_date,
            //     type: state => state.accounting.type,
            //     offset: state => state.accounting.offset,
            //     limit: state => state.accounting.limit,
            //     isLoadingTableData: state => state.accounting.isLoadingTableData,
            //     debtor_creditor: state => state.accounting.debtor_creditor,
            //     userSearchTerm: state => state.accounting.userSearchTerm
            // })

        }
    }

</script>