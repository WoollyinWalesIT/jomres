
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
e
l
e
c
t
o
r
_
d
r
o
p
d
o
w
n

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


 
 
 
 
 
 
 
 
$
b
a
s
i
c
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
p
r
o
p
e
r
t
y
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
b
a
s
i
c
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
e
t
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
n
a
m
e
_
m
u
l
t
i
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
a
u
t
h
o
r
i
s
e
d
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
P
r
o
p
e
r
t
y
 
=
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
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
p
a
g
e
o
u
t
p
u
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
u
r
P
a
g
e
U
r
l
 
=
 
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
P
a
g
e
U
r
l
(
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
i
e
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
J
R
U
s
e
r
-
>
a
u
t
h
o
r
i
s
e
d
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
 
a
s
 
$
p
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
i
e
s
[
$
p
]
 
=
 
$
b
a
s
i
c
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
d
e
t
a
i
l
s
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
s
[
$
p
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
n
a
t
c
a
s
e
s
o
r
t
(
$
p
r
o
p
e
r
t
i
e
s
)
;


 
 
 
 
 
 
 
 
$
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
p
r
o
p
e
r
t
i
e
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
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
k
e
y
,
 
$
v
a
l
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
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
w
i
n
d
o
w
.
l
o
c
a
t
i
o
n
=
\
'
'
 
.
 
$
c
u
r
P
a
g
e
U
r
l
 
.
 
'
&
t
h
i
s
P
r
o
p
e
r
t
y
=
'
 
.
 
'
\
'
 
+
 
t
h
i
s
.
v
a
l
u
e
;
"
'
;

 
 
 
 
 
 
 
 
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
w
i
n
d
o
w
.
l
o
c
a
t
i
o
n
=
\
'
'
.
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
N
O
S
E
F
.
'
&
t
h
i
s
P
r
o
p
e
r
t
y
=
'
.
'
\
'
 
+
 
t
h
i
s
.
v
a
l
u
e
;
"
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
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
o
p
t
i
o
n
s
,
 
'
s
w
i
t
c
h
_
p
r
o
p
e
r
t
y
'
,
 
'
 
a
u
t
o
c
o
m
p
l
e
t
e
=
"
o
f
f
"
 
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
c
u
r
r
e
n
t
P
r
o
p
e
r
t
y
,
 
f
a
l
s
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
u
r
P
a
g
e
U
R
L
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
p
a
g
e
U
R
L
 
=
 
'
h
t
t
p
'
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
S
E
R
V
E
R
[
'
H
T
T
P
S
'
]
)
 
&
&
 
$
_
S
E
R
V
E
R
[
'
H
T
T
P
S
'
]
 
=
=
 
'
o
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
U
R
L
 
.
=
 
'
s
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
p
a
g
e
U
R
L
 
.
=
 
'
:
/
/
'
;

 
 
 
 
 
 
 
 
i
f
 
(
$
_
S
E
R
V
E
R
[
'
S
E
R
V
E
R
_
P
O
R
T
'
]
 
!
=
 
'
8
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
U
R
L
 
.
=
 
$
_
S
E
R
V
E
R
[
'
S
E
R
V
E
R
_
N
A
M
E
'
]
.
'
:
'
.
$
_
S
E
R
V
E
R
[
'
S
E
R
V
E
R
_
P
O
R
T
'
]
.
$
_
S
E
R
V
E
R
[
'
R
E
Q
U
E
S
T
_
U
R
I
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
g
e
U
R
L
 
.
=
 
$
_
S
E
R
V
E
R
[
'
S
E
R
V
E
R
_
N
A
M
E
'
]
.
$
_
S
E
R
V
E
R
[
'
R
E
Q
U
E
S
T
_
U
R
I
'
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
p
a
g
e
U
R
L
;

 
 
 
 
}

}

