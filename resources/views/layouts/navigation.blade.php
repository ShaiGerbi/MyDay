<v-navigation-drawer app fixed permanent>
    <v-list nav>


        <v-list-item href="{{ route('tasks.index') }}">
            <v-list-item-content>
                <v-list-item-title>Tasks</v-list-item-title>
            </v-list-item-content>
        </v-list-item>

        <v-list-item href="{{ route('categories.index') }}">
            <v-list-item-content>
                <v-list-item-title>Categories</v-list-item-title>
            </v-list-item-content>
        </v-list-item>

        <v-list-item href="{{ route('equipment.index') }}">
            <v-list-item-content>
                <v-list-item-title>Equipment</v-list-item-title>
            </v-list-item-content>
        </v-list-item>

        <v-list-item href="{{ route('assigns.index') }}">
            <v-list-item-content>
                <v-list-item-title>Assigns</v-list-item-title>
            </v-list-item-content>
        </v-list-item>


    </v-list>
</v-navigation-drawer>
