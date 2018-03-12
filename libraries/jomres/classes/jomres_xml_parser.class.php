
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
x
m
l
_
p
a
r
s
e
r

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
$
x
m
l
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
a
w
X
M
L
 
=
 
$
x
m
l
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
r
s
e
r
 
=
 
x
m
l
_
p
a
r
s
e
r
_
c
r
e
a
t
e
(
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
r
s
e
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
 
f
u
n
c
t
i
o
n
 
p
a
r
s
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
p
a
r
s
e
r
 
=
 
$
t
h
i
s
-
>
p
a
r
s
e
r
;


 
 
 
 
 
 
 
 
x
m
l
_
p
a
r
s
e
r
_
s
e
t
_
o
p
t
i
o
n
(
$
p
a
r
s
e
r
,
 
X
M
L
_
O
P
T
I
O
N
_
C
A
S
E
_
F
O
L
D
I
N
G
,
 
0
)
;
 
/
/
 
D
o
n
t
 
m
e
s
s
 
w
i
t
h
 
m
y
 
c
A
s
E
 
s
E
t
T
i
n
g
s

 
 
 
 
 
 
 
 
x
m
l
_
p
a
r
s
e
r
_
s
e
t
_
o
p
t
i
o
n
(
$
p
a
r
s
e
r
,
 
X
M
L
_
O
P
T
I
O
N
_
S
K
I
P
_
W
H
I
T
E
,
 
1
)
;
 
/
/
 
D
o
n
t
 
b
o
t
h
e
r
 
w
i
t
h
 
e
m
p
t
y
 
i
n
f
o

 
 
 
 
 
 
 
 
i
f
 
(
!
x
m
l
_
p
a
r
s
e
_
i
n
t
o
_
s
t
r
u
c
t
(
$
p
a
r
s
e
r
,
 
$
t
h
i
s
-
>
r
a
w
X
M
L
,
 
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
,
 
$
t
h
i
s
-
>
k
e
y
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
t
u
s
 
=
 
'
e
r
r
o
r
:
 
'
.
x
m
l
_
e
r
r
o
r
_
s
t
r
i
n
g
(
x
m
l
_
g
e
t
_
e
r
r
o
r
_
c
o
d
e
(
$
p
a
r
s
e
r
)
)
.
'
 
a
t
 
l
i
n
e
 
'
.
x
m
l
_
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
t
_
l
i
n
e
_
n
u
m
b
e
r
(
$
p
a
r
s
e
r
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
x
m
l
_
p
a
r
s
e
r
_
f
r
e
e
(
$
p
a
r
s
e
r
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
i
n
d
D
u
p
l
i
c
a
t
e
K
e
y
s
(
)
;

 
 
 
 
 
 
 
 
/
/
 
t
m
p
 
a
r
r
a
y
 
u
s
e
d
 
f
o
r
 
s
t
a
c
k
i
n
g

 
 
 
 
 
 
 
 
$
s
t
a
c
k
 
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
c
r
e
m
e
n
t
 
=
 
0
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
v
a
l
u
e
A
r
r
a
y
 
a
s
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
l
[
 
'
t
y
p
e
'
 
]
 
=
=
 
'
o
p
e
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
f
 
a
r
r
a
y
 
k
e
y
 
i
s
 
d
u
p
l
i
c
a
t
e
 
t
h
e
n
 
s
e
n
d
 
i
n
 
i
n
c
r
e
m
e
n
t

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
v
a
l
[
 
'
t
a
g
'
 
]
,
 
$
t
h
i
s
-
>
d
u
p
l
i
c
a
t
e
K
e
y
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
_
p
u
s
h
(
$
s
t
a
c
k
,
 
$
t
h
i
s
-
>
d
u
p
l
i
c
a
t
e
K
e
y
s
[
 
$
v
a
l
[
 
'
t
a
g
'
 
]
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
t
h
i
s
-
>
d
u
p
l
i
c
a
t
e
K
e
y
s
[
 
$
v
a
l
[
 
'
t
a
g
'
 
]
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
e
l
s
e
 
s
e
n
d
 
i
n
 
t
a
g

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
_
p
u
s
h
(
$
s
t
a
c
k
,
 
$
v
a
l
[
 
'
t
a
g
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
v
a
l
[
 
'
t
y
p
e
'
 
]
 
=
=
 
'
c
l
o
s
e
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
_
p
o
p
(
$
s
t
a
c
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
r
e
s
e
t
 
t
h
e
 
i
n
c
r
e
m
e
n
t
 
i
f
 
t
h
e
y
 
t
a
g
 
d
o
e
s
 
n
o
t
 
e
x
i
s
t
s
 
i
n
 
t
h
e
 
s
t
a
c
k

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
v
a
l
[
 
'
t
a
g
'
 
]
,
 
$
s
t
a
c
k
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
u
p
l
i
c
a
t
e
K
e
y
s
[
 
$
v
a
l
[
 
'
t
a
g
'
 
]
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
v
a
l
[
 
'
t
y
p
e
'
 
]
 
=
=
 
'
c
o
m
p
l
e
t
e
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
f
 
a
r
r
a
y
 
k
e
y
 
i
s
 
d
u
p
l
i
c
a
t
e
 
t
h
e
n
 
s
e
n
d
 
i
n
 
i
n
c
r
e
m
e
n
t

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
v
a
l
[
 
'
t
a
g
'
 
]
,
 
$
t
h
i
s
-
>
d
u
p
l
i
c
a
t
e
K
e
y
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
_
p
u
s
h
(
$
s
t
a
c
k
,
 
$
t
h
i
s
-
>
d
u
p
l
i
c
a
t
e
K
e
y
s
[
 
$
v
a
l
[
 
'
t
a
g
'
 
]
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
t
h
i
s
-
>
d
u
p
l
i
c
a
t
e
K
e
y
s
[
 
$
v
a
l
[
 
'
t
a
g
'
 
]
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
e
l
s
e
 
s
e
n
d
 
i
n
 
t
a
g

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
_
p
u
s
h
(
$
s
t
a
c
k
,
 
$
v
a
l
[
 
'
t
a
g
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
v
a
l
[
 
'
v
a
l
u
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
[
 
'
v
a
l
u
e
'
 
]
 
=
 
'
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
s
e
t
A
r
r
a
y
V
a
l
u
e
(
$
t
h
i
s
-
>
o
u
t
p
u
t
,
 
$
s
t
a
c
k
,
 
$
v
a
l
[
 
'
v
a
l
u
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
_
p
o
p
(
$
s
t
a
c
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
i
n
c
r
e
m
e
n
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
s
t
a
t
u
s
 
=
 
'
s
u
c
c
e
s
s
:
 
x
m
l
 
w
a
s
 
p
a
r
s
e
d
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
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
 
f
i
n
d
D
u
p
l
i
c
a
t
e
K
e
y
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
 
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
)
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
d
u
p
l
i
c
a
t
e
 
k
e
y
s
 
a
r
e
 
w
h
e
n
 
t
w
o
 
c
o
m
p
l
e
t
e
 
t
a
g
s
 
a
r
e
 
s
i
d
e
 
b
y
 
s
i
d
e

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
[
 
$
i
 
]
[
 
'
t
y
p
e
'
 
]
 
=
=
 
'
c
o
m
p
l
e
t
e
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
 
+
 
1
 
<
 
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
[
 
$
i
 
+
 
1
 
]
[
 
'
t
a
g
'
 
]
 
=
=
 
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
[
 
$
i
 
]
[
 
'
t
a
g
'
 
]
 
&
&
 
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
[
 
$
i
 
+
 
1
 
]
[
 
'
t
y
p
e
'
 
]
 
=
=
 
'
c
o
m
p
l
e
t
e
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
u
p
l
i
c
a
t
e
K
e
y
s
[
 
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
[
 
$
i
 
]
[
 
'
t
a
g
'
 
]
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
a
l
s
o
 
w
h
e
n
 
a
 
c
l
o
s
e
 
t
a
g
 
i
s
 
b
e
f
o
r
e
 
a
n
 
o
p
e
n
 
t
a
g
 
a
n
d
 
t
h
e
 
t
a
g
s
 
a
r
e
 
t
h
e
 
s
a
m
e

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
[
 
$
i
 
]
[
 
'
t
y
p
e
'
 
]
 
=
=
 
'
c
l
o
s
e
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
 
+
 
1
 
<
 
c
o
u
n
t
(
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
[
 
$
i
 
+
 
1
 
]
[
 
'
t
y
p
e
'
 
]
 
=
=
 
'
o
p
e
n
'
 
&
&
 
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
[
 
$
i
 
+
 
1
 
]
[
 
'
t
a
g
'
 
]
 
=
=
 
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
[
 
$
i
 
]
[
 
'
t
a
g
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
u
p
l
i
c
a
t
e
K
e
y
s
[
 
$
t
h
i
s
-
>
v
a
l
u
e
A
r
r
a
y
[
 
$
i
 
]
[
 
'
t
a
g
'
 
]
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
 
s
e
t
A
r
r
a
y
V
a
l
u
e
(
&
$
a
r
r
a
y
,
 
$
s
t
a
c
k
,
 
$
v
a
l
u
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
s
t
a
c
k
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
y
 
=
 
a
r
r
a
y
_
s
h
i
f
t
(
$
s
t
a
c
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
t
A
r
r
a
y
V
a
l
u
e
(
$
a
r
r
a
y
[
 
$
k
e
y
 
]
,
 
$
s
t
a
c
k
,
 
$
v
a
l
u
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
a
r
r
a
y
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
a
y
 
=
 
$
v
a
l
u
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
O
u
t
p
u
t
(
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
o
u
t
p
u
t
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
S
t
a
t
u
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
 
$
t
h
i
s
-
>
s
t
a
t
u
s
;

 
 
 
 
}

}

