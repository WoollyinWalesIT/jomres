
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


/
*
*

 
*
 
C
r
e
a
t
e
s
 
t
h
e
 
J
o
m
r
e
s
 
c
u
r
r
e
n
c
y
 
f
o
r
m
a
t
 
o
b
j
e
c
t
.

 
#

 
*

 
*
 
@
s
i
n
c
e
 
2
.
6

 
*
/

c
l
a
s
s
 
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
f
o
r
m
a
t

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
;


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
_
f
o
r
m
a
t
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
l
o
n
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
C
l
o
n
i
n
g
 
n
o
t
 
a
l
l
o
w
e
d
 
o
n
 
a
 
s
i
n
g
l
e
t
o
n
 
o
b
j
e
c
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
f
o
r
m
a
t
(
$
c
f
o
r
m
a
t
 
=
 
f
a
l
s
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
p
r
o
p
e
r
t
y
_
u
i
d
'
)
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
$
c
f
o
r
m
a
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
c
f
o
r
m
a
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
 
'
c
f
o
r
m
a
t
'
 
]
 
=
 
'
2
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
f
o
r
m
a
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
c
f
o
r
m
a
t
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
f
o
r
m
a
t
 
=
 
$
c
f
o
r
m
a
t
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
_
f
o
r
m
a
t
s
 
=
 
a
r
r
a
y
(
'
1
'
 
=
>
 
'
1
2
3
.
4
5
6
,
0
0
'
,
 
'
2
'
 
=
>
 
'
1
2
3
,
4
5
6
.
0
0
'
,
 
'
3
'
 
=
>
 
'
1
2
3
4
5
6
.
0
0
'
,
 
'
4
'
 
=
>
 
'
1
2
3
 
4
5
6
.
0
0
'
,
 
'
5
'
 
=
>
 
'
1
2
3
 
4
5
6
,
0
0
'
,
 
'
6
'
 
=
>
 
'
1
2
3
4
5
6
'
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
n
u
m
b
e
r
,
 
f
o
r
m
a
t
t
e
d
 
a
c
c
o
r
d
i
n
g
 
t
o
 
c
f
o
r
m
a
t
 
v
a
r
i
a
b
l
e
.

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
f
o
r
m
a
t
t
e
d
(
$
n
u
m
b
e
r
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
*
 
B
i
t
c
o
i
n
,
 
f
o
r
 
e
x
a
m
p
l
e
,
 
c
a
n
 
h
a
v
e
 
p
r
i
c
e
s
 
l
i
k
e
 
.
0
0
7
,
 
w
h
i
c
h
 
n
u
m
b
e
r
_
f
o
r
m
a
t
 
w
i
l
l
 
r
e
n
d
e
r
 
a
s
 
0
.
0
0
,
 
s
o
 
i
f
 
t
h
e
 
n
u
m
b
e
r
 
i
s
 
l
o
w
e
r
 
t
h
a
n
 
.
0
0
9
 
t
h
e
n
 
w
e
'
l
l
 
n
e
e
d
 
t
o
 
o
u
t
p
u
t
 
t
h
e
 
p
r
i
c
e
 
a
s
 
i
s
,
 
i
n
s
t
e
a
d
 
o
f
 
u
s
i
n
g
 
n
u
m
b
e
r
_
f
o
r
m
a
t
 
*
/

 
 
 
 
 
 
 
 
$
r
e
t
D
a
t
a
 
=
 
'
'
;

 
 
 
 
 
 
 
 
i
f
 
(
 
$
n
u
m
b
e
r
 
<
 
1
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
n
u
m
b
e
r
,
 
8
)
;

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
(
$
i
=
0
;
 
$
i
<
8
-
2
;
 
$
i
+
+
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
u
b
s
t
r
(
$
s
,
 
-
1
)
 
=
=
 
'
0
'
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
 
=
 
s
u
b
s
t
r
(
$
s
,
 
0
,
 
-
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
s
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
c
f
o
r
m
a
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
1
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
D
a
t
a
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
n
u
m
b
e
r
,
 
2
,
 
'
,
'
,
 
'
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
2
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
D
a
t
a
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
n
u
m
b
e
r
,
 
2
,
 
'
.
'
,
 
'
,
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
3
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
D
a
t
a
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
n
u
m
b
e
r
,
 
2
,
 
'
.
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
4
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
D
a
t
a
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
n
u
m
b
e
r
,
 
2
,
 
'
.
'
,
 
'
 
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
5
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
D
a
t
a
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
n
u
m
b
e
r
,
 
2
,
 
'
,
'
,
 
'
 
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
6
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
D
a
t
a
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
n
u
m
b
e
r
,
 
0
,
 
'
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
D
a
t
a
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
n
u
m
b
e
r
,
 
2
,
 
'
.
'
,
 
'
,
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
t
r
_
r
e
p
l
a
c
e
(
'
 
'
,
 
'
&
n
b
s
p
;
'
,
 
$
r
e
t
D
a
t
a
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
R
e
t
u
r
n
s
 
t
h
e
 
c
u
r
r
e
n
c
y
 
f
o
r
m
a
t
 
d
r
o
p
d
o
w
n
 
i
n
p
u
t
.

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
c
u
r
r
e
n
c
y
_
f
o
r
m
a
t
_
d
r
o
p
d
o
w
n
i
n
p
u
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
c
f
o
r
m
a
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
 
'
c
f
o
r
m
a
t
'
 
]
 
=
 
'
2
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
f
m
t
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
_
f
o
r
m
a
t
s
 
a
s
 
$
k
e
y
 
=
>
 
$
f
o
r
m
a
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
m
t
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
k
e
y
,
 
$
f
o
r
m
a
t
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
d
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
f
m
t
s
,
 
'
c
f
g
_
c
f
o
r
m
a
t
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
m
r
C
o
n
f
i
g
[
 
'
c
f
o
r
m
a
t
'
 
]
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
d
r
o
p
d
o
w
n
;

 
 
 
 
}

}

