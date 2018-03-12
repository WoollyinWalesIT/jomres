
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
t
i
m
e
z
o
n
e
s

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

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
h
e
c
k
_
t
i
m
e
z
o
n
e
_
c
h
a
n
g
e
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
t
i
m
e
z
o
n
e
 
=
 
'
U
T
C
'
;

 
 
 
 
 
 
 
 
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
C
O
N
F
I
G
 
=
 
n
e
w
 
J
C
o
n
f
i
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
t
i
m
e
z
o
n
e
 
=
 
$
C
O
N
F
I
G
-
>
o
f
f
s
e
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
u
s
e
r
s
_
t
i
m
e
z
o
n
e
 
=
 
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
u
s
e
r
s
_
t
i
m
e
z
o
n
e
(
)
;

 
 
 
 
 
 
 
 
/
/
d
a
t
e
_
d
e
f
a
u
l
t
_
t
i
m
e
z
o
n
e
_
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
u
s
e
r
s
_
t
i
m
e
z
o
n
e
 
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
 
c
h
e
c
k
_
t
i
m
e
z
o
n
e
_
c
h
a
n
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
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
_
P
O
S
T
[
 
'
u
s
e
r
_
t
i
m
e
z
o
n
e
'
 
]
)
 
&
&
 
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
_
t
i
m
e
z
o
n
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
u
s
e
r
_
t
i
m
e
z
o
n
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
z
o
n
e
s
 
=
 
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
s
u
p
p
o
r
t
e
d
_
t
i
m
e
z
o
n
e
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
s
e
l
e
c
t
e
d
_
t
i
m
e
z
o
n
e
,
 
$
z
o
n
e
s
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
m
a
n
a
g
e
r
s
 
S
E
T
 
`
u
s
e
r
s
_
t
i
m
e
z
o
n
e
`
 
=
 
'
"
.
$
s
e
l
e
c
t
e
d
_
t
i
m
e
z
o
n
e
.
"
'
 
W
H
E
R
E
 
`
m
a
n
a
g
e
r
_
u
i
d
`
=
"
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
J
R
U
s
e
r
-
>
j
o
m
r
e
s
_
m
a
n
a
g
e
r
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
s
_
t
i
m
e
z
o
n
e
 
=
 
$
s
e
l
e
c
t
e
d
_
t
i
m
e
z
o
n
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
d
r
o
p
d
o
w
n
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
z
o
n
e
s
 
=
 
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
s
u
p
p
o
r
t
e
d
_
t
i
m
e
z
o
n
e
s
(
)
;

 
 
 
 
 
 
 
 
$
z
o
n
e
_
o
p
t
i
o
n
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
z
o
n
e
s
 
a
s
 
$
z
o
n
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
z
o
n
e
_
o
p
t
i
o
n
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
z
o
n
e
[
 
'
z
o
n
e
'
 
]
,
 
$
z
o
n
e
[
 
'
t
e
x
t
'
 
]
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
j
a
v
a
s
c
r
i
p
t
 
=
 
'
o
n
c
h
a
n
g
e
=
"
t
h
i
s
.
f
o
r
m
.
s
u
b
m
i
t
(
)
;
"
'
;

 
 
 
 
 
 
 
 
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
z
o
n
e
_
o
p
t
i
o
n
s
,
 
'
u
s
e
r
_
t
i
m
e
z
o
n
e
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
.
$
j
a
v
a
s
c
r
i
p
t
.
'
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
t
h
i
s
-
>
u
s
e
r
s
_
t
i
m
e
z
o
n
e
)
;


 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
h
t
m
l
 
=
 
'
<
f
o
r
m
 
a
c
t
i
o
n
=
"
"
 
m
e
t
h
o
d
=
"
p
o
s
t
"
 
n
a
m
e
=
"
u
s
e
r
_
t
i
m
e
z
o
n
e
"
>
'
;

 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
h
t
m
l
 
.
=
 
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

 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
h
t
m
l
 
.
=
 
'
<
/
f
o
r
m
>
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
s
e
l
e
c
t
h
t
m
l
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
u
s
e
r
s
_
t
i
m
e
z
o
n
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
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
J
R
U
s
e
r
-
>
u
s
e
r
s
_
t
i
m
e
z
o
n
e
)
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
J
R
U
s
e
r
-
>
u
s
e
r
s
_
t
i
m
e
z
o
n
e
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
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
t
i
m
e
z
o
n
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
s
u
p
p
o
r
t
e
d
_
t
i
m
e
z
o
n
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
l
o
c
a
t
i
o
n
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

 
 
 
 
 
 
 
 
$
z
o
n
e
s
 
=
 
t
i
m
e
z
o
n
e
_
i
d
e
n
t
i
f
i
e
r
s
_
l
i
s
t
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
z
o
n
e
s
 
a
s
 
$
z
o
n
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
z
o
n
e
E
x
p
l
o
d
e
d
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
z
o
n
e
)
;
 
/
/
 
0
 
=
>
 
C
o
n
t
i
n
e
n
t
,
 
1
 
=
>
 
C
i
t
y

 
 
 
 
 
 
 
 
 
 
 
 
/
/
O
n
l
y
 
u
s
e
 
"
f
r
i
e
n
d
l
y
"
 
c
o
n
t
i
n
e
n
t
 
n
a
m
e
s

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
z
o
n
e
E
x
p
l
o
d
e
d
[
 
0
 
]
 
=
=
 
'
A
f
r
i
c
a
'
 
|
|
 
$
z
o
n
e
E
x
p
l
o
d
e
d
[
 
0
 
]
 
=
=
 
'
A
m
e
r
i
c
a
'
 
|
|
 
$
z
o
n
e
E
x
p
l
o
d
e
d
[
 
0
 
]
 
=
=
 
'
A
n
t
a
r
c
t
i
c
a
'
 
|
|
 
$
z
o
n
e
E
x
p
l
o
d
e
d
[
 
0
 
]
 
=
=
 
'
A
r
c
t
i
c
'
 
|
|
 
$
z
o
n
e
E
x
p
l
o
d
e
d
[
 
0
 
]
 
=
=
 
'
A
s
i
a
'
 
|
|
 
$
z
o
n
e
E
x
p
l
o
d
e
d
[
 
0
 
]
 
=
=
 
'
A
t
l
a
n
t
i
c
'
 
|
|
 
$
z
o
n
e
E
x
p
l
o
d
e
d
[
 
0
 
]
 
=
=
 
'
A
u
s
t
r
a
l
i
a
'
 
|
|
 
$
z
o
n
e
E
x
p
l
o
d
e
d
[
 
0
 
]
 
=
=
 
'
E
u
r
o
p
e
'
 
|
|
 
$
z
o
n
e
E
x
p
l
o
d
e
d
[
 
0
 
]
 
=
=
 
'
I
n
d
i
a
n
'
 
|
|
 
$
z
o
n
e
E
x
p
l
o
d
e
d
[
 
0
 
]
 
=
=
 
'
P
a
c
i
f
i
c
'
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
z
o
n
e
E
x
p
l
o
d
e
d
[
 
1
 
]
)
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
e
a
 
=
 
$
z
o
n
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
c
a
t
i
o
n
s
[
 
$
z
o
n
e
 
]
 
=
 
a
r
r
a
y
(
'
z
o
n
e
'
 
=
>
 
$
z
o
n
e
,
 
'
t
e
x
t
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
T
I
M
E
Z
O
N
E
S
_
'
.
$
z
o
n
e
,
 
$
z
o
n
e
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
l
o
c
a
t
i
o
n
s
;

 
 
 
 
}

}

