
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
0
6
0
0
0
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
c
e
i
v
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

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
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
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
r
e
q
u
e
s
t
_
l
o
g
(
)
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
 
i
n
t
v
a
l
(
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
,
 
0
)
)
;


 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
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
)
;

 
 
 
 
 
 
 
 
$
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
 
=
 
n
e
w
 
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
 
=
 
$
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
;


 
 
 
 
 
 
 
 
$
p
a
t
h
_
t
o
_
c
l
a
s
s
f
i
l
e
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
1
0
5
1
0
'
]
[
$
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
-
>
g
a
t
e
w
a
y
]
[
'
f
i
l
e
p
a
t
h
'
]
;

 
 
 
 
 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
$
p
a
t
h
_
t
o
_
c
l
a
s
s
f
i
l
e
.
'
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
c
e
i
v
e
.
c
l
a
s
s
.
p
h
p
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
c
e
i
v
e
 
=
 
n
e
w
 
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
c
e
i
v
e
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
d
a
t
a
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
c
e
i
v
e
-
>
c
o
n
f
i
r
m
_
p
a
y
m
e
n
t
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
-
>
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
;


 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
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
i
n
v
o
i
c
e
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
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
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
-
>
i
d
 
=
 
$
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
e
t
I
n
v
o
i
c
e
(
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
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
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
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
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
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
[
'
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
-
>
g
e
t
S
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
[
'
s
t
a
t
u
s
'
]
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
-
>
c
o
m
m
i
t
U
p
d
a
t
e
S
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
(
)
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
-
>
m
a
r
k
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
i
d
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
a
s
k
=
m
y
_
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
s
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
a
s
k
=
l
i
s
t
_
i
n
v
o
i
c
e
s
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
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
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

