
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
r
p
o
r
t
a
l
_
p
r
o
p
e
r
t
y
_
f
u
n
c
t
i
o
n
s
 
/
/
 
F
u
n
c
t
i
o
n
s
 
s
u
p
p
l
i
e
d
 
a
s
 
a
 
c
l
a
s
s
 
s
o
 
t
h
a
t
 
t
h
e
y
 
c
a
n
 
b
e
 
e
x
t
e
n
d
e
d
 
e
a
s
i
l
y
 
w
i
t
h
o
u
t
 
r
e
w
r
i
t
i
n
g
 
 
t
h
e
 
f
u
n
c
t
i
o
n
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
 
g
e
t
A
l
l
J
o
m
r
e
s
P
r
o
p
e
r
t
i
e
s
(
$
l
i
m
i
t
 
=
 
f
a
l
s
e
,
 
$
l
i
m
i
t
s
t
a
r
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
r
e
t
R
e
s
u
l
t
 
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
c
a
v
e
a
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
i
f
 
(
$
l
i
m
i
t
 
&
&
 
$
l
i
m
i
t
s
t
a
r
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
v
e
a
t
 
=
 
'
 
L
I
M
I
T
 
'
.
$
l
i
m
i
t
s
t
a
r
t
.
'
,
'
.
$
l
i
m
i
t
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
p
r
o
p
e
r
t
y
s
_
u
i
d
,
p
r
o
p
e
r
t
y
_
n
a
m
e
,
p
r
o
p
e
r
t
y
_
s
t
r
e
e
t
,
p
r
o
p
e
r
t
y
_
t
o
w
n
,
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
,
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
y
,
p
r
o
p
e
r
t
y
_
p
o
s
t
c
o
d
e
,
p
u
b
l
i
s
h
e
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
p
r
o
p
e
r
t
y
s
 
'
 
.
$
c
a
v
e
a
t
;

 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
$
q
u
e
r
y
;
e
x
i
t
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

 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
m
e
r
i
c
(
$
r
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
r
e
g
i
o
n
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
r
e
g
i
o
n
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
o
m
r
e
s
_
r
e
g
i
o
n
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
 
=
 
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
R
E
G
I
O
N
S
_
'
.
$
r
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
r
e
g
i
o
n
,
 
$
j
o
m
r
e
s
_
r
e
g
i
o
n
s
-
>
g
e
t
_
r
e
g
i
o
n
_
n
a
m
e
(
$
r
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
r
e
g
i
o
n
)
,
 
t
r
u
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
 
=
 
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
P
R
O
P
E
R
T
Y
_
R
E
G
I
O
N
'
.
$
r
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
r
e
g
i
o
n
,
 
$
r
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
r
e
g
i
o
n
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
R
e
s
u
l
t
[
 
$
r
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
s
_
u
i
d
 
]
[
 
'
i
d
'
 
]
 
=
 
$
r
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
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
R
e
s
u
l
t
[
 
$
r
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
s
_
u
i
d
 
]
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
n
a
m
e
'
 
]
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
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
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
R
e
s
u
l
t
[
 
$
r
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
s
_
u
i
d
 
]
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
s
t
r
e
e
t
'
 
]
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
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
s
t
r
e
e
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
R
e
s
u
l
t
[
 
$
r
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
s
_
u
i
d
 
]
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
t
o
w
n
'
 
]
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
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
t
o
w
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
R
e
s
u
l
t
[
 
$
r
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
s
_
u
i
d
 
]
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
r
e
g
i
o
n
'
 
]
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
R
e
s
u
l
t
[
 
$
r
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
s
_
u
i
d
 
]
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
c
o
u
n
t
r
y
'
 
]
 
=
 
$
r
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
c
o
u
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
R
e
s
u
l
t
[
 
$
r
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
s
_
u
i
d
 
]
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
p
o
s
t
c
o
d
e
'
 
]
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
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
p
o
s
t
c
o
d
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
R
e
s
u
l
t
[
 
$
r
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
s
_
u
i
d
 
]
[
 
'
p
u
b
l
i
s
h
e
d
'
 
]
 
=
 
$
r
-
>
p
u
b
l
i
s
h
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
t
R
e
s
u
l
t
;

 
 
 
 
}

}

