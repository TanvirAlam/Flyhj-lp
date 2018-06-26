<template>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Key</th>
                    <th>Value</th>
                    <th>Actions</th>
                </tr>
            </thead>
        <tbody>
            <TableRow></TableRow>
            <TableRow></TableRow>
            <TableRow></TableRow>
            <TableRow></TableRow>
        </tbody>
    </table>
    </div>
</template>
<script>
import TableRow from "../components/TableRow";

    export default {
        components: {
            TableRow
        }
    }
</script>
