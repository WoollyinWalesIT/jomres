
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
/
 
W
h
e
n
 
s
e
n
d
i
n
g
 
i
n
v
o
i
c
e
 
p
a
y
m
e
n
t
s
 
t
o
 
g
a
t
e
w
a
y
s
,
 
s
o
m
e
 
g
a
t
e
w
a
y
s
 
w
i
l
l
 
n
o
t
 
l
e
t
 
y
o
u
 
s
e
n
d
 
m
o
r
e
 
t
h
a
n
 
o
n
e
 
r
e
t
u
r
n
 
e
l
e
m
e
n
t
 
i
n
 
t
h
e
 
u
r
l
 
w
h
e
n
 
p
a
s
s
i
n
g
 
b
a
c
k
 
t
o
 
(
 
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
 
)
 
J
o
m
r
e
s
.

/
/
 
T
h
i
s
 
c
l
a
s
s
 
i
s
 
u
s
e
d
 
t
o
 
c
r
e
a
t
e
 
a
 
p
a
y
m
e
n
t
 
r
e
f
e
r
e
n
c
e
 
b
e
t
w
e
e
n
 
a
n
 
i
n
v
o
i
c
e
 
i
d
 
&
 
a
 
g
a
t
e
w
a
y
 
s
o
 
t
h
a
t
 
g
a
t
e
w
a
y
 
p
r
o
c
e
s
s
,
 
r
e
c
e
i
v
i
n
g
 
p
a
y
m
e
n
t
 
c
o
n
f
i
r
m
a
t
i
o
n
,
 
c
a
n
 
t
h
e
n
 
q
u
e
r
y
 
t
h
i
s
 
t
a
b
l
e
 
f
o
r
 
t
h
e
 
i
n
v
o
i
c
e
 
n
u
m
b
e
r
 
e
t
c


c
l
a
s
s
 
j
r
p
o
r
t
a
l
_
p
a
y
m
e
n
t
_
r
e
f
e
r
e
n
c
e

{

 
 
 
 
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
 
s
e
t
_
p
a
y
m
e
n
t
_
r
e
f
e
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
"
S
E
L
E
C
T
 
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
i
n
v
o
i
c
e
_
p
a
y
m
e
n
t
_
r
e
f
 
W
H
E
R
E
 
i
n
v
o
i
c
e
_
i
d
 
=
"
.
$
t
h
i
s
-
>
i
n
v
o
i
c
e
_
i
d
.
"
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
$
p
a
y
m
e
n
t
_
r
e
f
e
r
e
n
c
e
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
1
)
;
 
 
 

 
 
 
 
 
 
 
 
i
f
 
(
!
$
p
a
y
m
e
n
t
_
r
e
f
e
r
e
n
c
e
)
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
i
n
v
o
i
c
e
_
p
a
y
m
e
n
t
_
r
e
f
 
(
 
`
i
n
v
o
i
c
e
_
i
d
`
 
,
 
`
g
a
t
e
w
a
y
`
 
)
 
V
A
L
U
E
S
 
(
 
'
"
.
$
t
h
i
s
-
>
i
n
v
o
i
c
e
_
i
d
.
"
'
 
,
 
'
"
.
$
t
h
i
s
-
>
g
a
t
e
w
a
y
.
"
'
 
)
 
"
;

 
 
 
 
 
 
 
 
}
e
l
s
e
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
i
n
v
o
i
c
e
_
p
a
y
m
e
n
t
_
r
e
f
 
S
E
T
 
g
a
t
e
w
a
y
 
=
 
'
"
.
$
t
h
i
s
-
>
g
a
t
e
w
a
y
.
"
'
 
W
H
E
R
E
 
i
d
=
"
.
(
i
n
t
)
$
p
a
y
m
e
n
t
_
r
e
f
e
r
e
n
c
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
t
r
y
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
m
e
n
t
_
r
e
f
e
r
e
n
c
e
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
p
a
y
m
e
n
t
_
r
e
f
e
r
e
n
c
e
;

 
 
 
 
 
 
 
 
}
 
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
o
u
t
p
u
t
_
f
a
t
a
l
_
e
r
r
o
r
(
$
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
i
n
v
o
i
c
e
_
d
e
t
a
i
l
s
_
f
o
r
_
r
e
f
e
r
e
n
c
e
(
$
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
m
e
n
t
_
r
e
f
e
r
e
n
c
e
 
=
 
(
i
n
t
)
 
$
i
d
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
i
n
v
o
i
c
e
_
i
d
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
i
n
v
o
i
c
e
_
p
a
y
m
e
n
t
_
r
e
f
 
 
W
H
E
R
E
 
i
d
 
=
 
'
.
(
i
n
t
)
 
$
i
d
.
'
 
L
I
M
I
T
 
1
'
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
i
d
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
_
i
d
 
!
=
 
f
a
l
s
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
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
i
n
v
o
i
c
e
_
d
a
t
a
(
$
i
n
v
o
i
c
e
_
i
d
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
i
n
v
o
i
c
e
_
d
a
t
a
(
$
i
n
v
o
i
c
e
_
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
a
c
t
i
v
e
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
i
d
`
,
`
i
n
v
o
i
c
e
_
i
d
`
,
`
g
a
t
e
w
a
y
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
i
n
v
o
i
c
e
_
p
a
y
m
e
n
t
_
r
e
f
 
 
W
H
E
R
E
 
i
n
v
o
i
c
e
_
i
d
 
=
 
'
.
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
i
d
.
'
 
L
I
M
I
T
 
1
'
;

 
 
 
 
 
 
 
 
$
p
a
y
m
e
n
t
_
d
e
t
a
i
l
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
2
)
;


 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
b
a
s
i
c
_
i
n
v
o
i
c
e
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
g
a
t
h
e
r
D
a
t
a
(
$
i
n
v
o
i
c
e
_
i
d
)
;


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
t
a
g
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
c
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
.
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
n
u
m
b
e
r
 
=
 
t
r
i
m
(
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
n
u
m
b
e
r
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
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

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
 
>
 
0
 
|
|
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
s
e
t
t
i
n
g
,
v
a
l
u
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
l
u
g
i
n
s
e
t
t
i
n
g
s
 
W
H
E
R
E
 
p
r
i
d
 
=
 
0
 
A
N
D
 
p
l
u
g
i
n
 
=
 
'
"
.
$
p
a
y
m
e
n
t
_
d
e
t
a
i
l
s
[
'
g
a
t
e
w
a
y
'
]
.
"
'
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
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
s
e
t
t
i
n
g
s
L
i
s
t
 
a
s
 
$
s
e
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
$
s
e
t
-
>
s
e
t
t
i
n
g
]
 
=
 
$
s
e
t
-
>
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
t
t
i
n
g
s
[
'
a
c
t
i
v
e
'
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
a
c
t
i
v
e
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
 
=
 
g
e
t
_
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
(
$
p
a
y
m
e
n
t
_
d
e
t
a
i
l
s
[
'
g
a
t
e
w
a
y
'
]
,
 
$
i
n
v
o
i
c
e
-
>
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
t
t
i
n
g
s
[
'
a
c
t
i
v
e
'
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
a
c
t
i
v
e
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
p
a
y
m
e
n
t
_
d
e
t
a
i
l
s
[
'
g
a
t
e
w
a
y
'
]
 
=
=
 
'
p
a
y
p
a
l
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
j
r
p
o
r
t
a
l
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
g
e
t
_
p
a
y
p
a
l
_
s
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
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
o
v
e
r
r
i
d
e
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
 
'
u
s
e
s
a
n
d
b
o
x
'
 
]
 
=
 
t
r
i
m
(
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
u
s
e
s
a
n
d
b
o
x
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
 
'
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
 
=
 
t
r
i
m
(
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
 
'
p
a
y
p
a
l
e
m
a
i
l
'
 
]
 
=
 
t
r
i
m
(
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
e
m
a
i
l
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
 
'
p
e
n
d
i
n
g
o
k
'
 
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
 
'
r
e
c
e
i
v
e
I
P
N
e
m
a
i
l
'
 
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
 
'
o
v
e
r
r
i
d
e
'
 
]
 
=
 
t
r
i
m
(
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
o
v
e
r
r
i
d
e
'
 
]
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
 
'
c
l
i
e
n
t
_
i
d
'
 
]
 
=
 
t
r
i
m
(
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
c
l
i
e
n
t
_
i
d
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
 
'
s
e
c
r
e
t
'
 
]
 
=
 
t
r
i
m
(
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
s
e
c
r
e
t
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
 
'
c
l
i
e
n
t
_
i
d
_
s
a
n
d
b
o
x
'
 
]
 
=
 
t
r
i
m
(
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
c
l
i
e
n
t
_
i
d
_
s
a
n
d
b
o
x
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
 
'
s
e
c
r
e
t
_
s
a
n
d
b
o
x
'
 
]
 
=
 
t
r
i
m
(
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
s
e
c
r
e
t
_
s
a
n
d
b
o
x
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
[
 
'
a
c
t
i
v
e
'
 
]
 
=
 
t
r
i
m
(
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
a
c
t
i
v
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
g
a
t
e
w
a
y
_
a
c
t
i
v
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
 
>
 
0
 
&
&
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
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
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
b
a
s
i
c
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
,
 
$
i
n
v
o
i
c
e
-
>
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
y
e
r
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
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
p
a
y
e
r
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
'
i
n
v
o
i
c
e
_
n
u
m
b
e
r
'
]
 
=
 
$
p
a
y
m
e
n
t
_
d
e
t
a
i
l
s
[
'
i
n
v
o
i
c
e
_
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
'
c
u
r
r
e
n
c
y
c
o
d
e
'
]
 
=
 
$
i
n
v
o
i
c
e
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
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
'
b
a
l
a
n
c
e
'
]
 
=
 
$
i
n
v
o
i
c
e
-
>
b
a
l
a
n
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
'
l
i
n
e
_
i
t
e
m
s
'
]
 
=
 
$
i
n
v
o
i
c
e
-
>
l
i
n
e
i
t
e
m
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
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
]
 
=
 
$
i
n
v
o
i
c
e
-
>
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
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
o
o
k
i
n
g
_
n
u
m
b
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
]
 
=
 
$
b
o
o
k
i
n
g
_
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
a
y
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
'
p
a
y
e
r
'
]
 
=
 
$
p
a
y
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
'
p
a
y
e
r
'
]
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
 
=
 
$
s
e
t
t
i
n
g
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
_
d
a
t
a
 
=
 
$
i
n
v
o
i
c
e
_
d
a
t
a
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
a
t
e
w
a
y
 
=
 
$
p
a
y
m
e
n
t
_
d
e
t
a
i
l
s
[
'
g
a
t
e
w
a
y
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
_
i
d
 
=
 
$
p
a
y
m
e
n
t
_
d
e
t
a
i
l
s
[
'
i
n
v
o
i
c
e
_
i
d
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(
'
g
a
t
e
w
a
y
'
 
=
>
 
$
t
h
i
s
-
>
g
a
t
e
w
a
y
,
 
'
i
n
v
o
i
c
e
_
d
a
t
a
'
 
=
>
 
$
i
n
v
o
i
c
e
_
d
a
t
a
,
 
'
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
'
 
=
>
 
$
t
h
i
s
-
>
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
,
 
'
i
n
v
o
i
c
e
_
i
d
'
 
=
>
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
_
i
d
,
 
'
p
a
y
m
e
n
t
_
r
e
f
e
r
e
n
c
e
'
 
=
>
 
$
p
a
y
m
e
n
t
_
d
e
t
a
i
l
s
[
'
i
d
'
]
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
m
a
r
k
_
p
a
y
m
e
n
t
_
r
e
f
e
r
e
n
c
e
_
p
a
i
d
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
p
a
y
m
e
n
t
_
r
e
f
e
r
e
n
c
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
i
n
v
o
i
c
e
_
p
a
y
m
e
n
t
_
r
e
f
 
S
E
T
 
`
p
a
i
d
`
 
=
 
1
 
W
H
E
R
E
 
i
d
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
a
y
m
e
n
t
_
r
e
f
e
r
e
n
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
t
r
y
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
o
u
t
p
u
t
_
f
a
t
a
l
_
e
r
r
o
r
(
$
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

