
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
w
i
d
g
e
t
s

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
w
i
d
g
e
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

	
	
$
t
h
i
s
-
>
t
h
i
s
_
p
a
g
e
_
w
i
d
g
e
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
w
i
d
g
e
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


	
/
/
r
e
g
i
s
t
e
r
 
w
i
d
g
e
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
 
r
e
g
i
s
t
e
r
_
w
i
d
g
e
t
(
$
e
v
e
n
t
P
o
i
n
t
 
=
 
'
'
,
 
$
e
v
e
n
t
N
a
m
e
 
=
 
'
'
,
 
$
t
i
t
l
e
 
=
 
'
'
,
 
$
d
e
f
a
u
l
t
 
=
 
f
a
l
s
e
)

	
{

	
	
i
f
 
(
$
t
i
t
l
e
 
=
=
 
'
'
 
|
|
 
$
e
v
e
n
t
N
a
m
e
 
=
=
 
'
'
 
|
|
 
$
e
v
e
n
t
P
o
i
n
t
 
=
=
 
'
'
)
 
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
w
i
d
g
e
t
s
[
$
e
v
e
n
t
N
a
m
e
]
)
)
 
{

	
	
	
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

	
	

	
	
$
t
h
i
s
-
>
w
i
d
g
e
t
s
[
$
e
v
e
n
t
N
a
m
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
e
v
e
n
t
P
o
i
n
t
'
 
=
>
 
$
e
v
e
n
t
P
o
i
n
t
,

	
	
	
'
t
i
t
l
e
'
 
=
>
 
$
t
i
t
l
e

	
	
)
;

	
	

	
	
i
f
 
(
$
d
e
f
a
u
l
t
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
e
f
a
u
l
t
_
w
i
d
g
e
t
s
[
$
e
v
e
n
t
N
a
m
e
]
 
=
 
$
t
h
i
s
-
>
w
i
d
g
e
t
s
[
$
e
v
e
n
t
N
a
m
e
]
;

	
	
}

	
	

	
	
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

	

	
/
/
u
n
r
e
g
i
s
t
e
r
 
w
i
d
g
e
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
 
u
n
r
e
g
i
s
t
e
r
_
w
i
d
g
e
t
(
$
e
v
e
n
t
N
a
m
e
 
=
 
'
'
)

	
{

	
	
i
f
 
(
$
e
v
e
n
t
N
a
m
e
 
=
=
 
'
'
)
 
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
w
i
d
g
e
t
s
[
$
e
v
e
n
t
N
a
m
e
]
)
)
 
{

	
	
	
u
n
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
w
i
d
g
e
t
s
[
$
e
v
e
n
t
N
a
m
e
]
)
;

	
	
}

	
	

	
	
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

	

	
/
/
u
n
r
e
g
i
s
t
e
r
 
w
i
d
g
e
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
 
u
n
r
e
g
i
s
t
e
r
_
d
e
f
a
u
l
t
_
w
i
d
g
e
t
(
$
e
v
e
n
t
N
a
m
e
 
=
 
'
'
)

	
{

	
	
i
f
 
(
$
e
v
e
n
t
N
a
m
e
 
=
=
 
'
'
)
 
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
d
e
f
a
u
l
t
_
w
i
d
g
e
t
s
[
$
e
v
e
n
t
N
a
m
e
]
)
)
 
{

	
	
	
u
n
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
d
e
f
a
u
l
t
_
w
i
d
g
e
t
s
[
$
e
v
e
n
t
N
a
m
e
]
)
;

	
	
}

	
	

	
	
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

	

	
/
/
g
e
n
e
r
a
t
e
 
t
h
i
s
 
p
a
g
e
 
w
i
d
g
e
t
s
 
l
i
s
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
_
w
i
d
g
e
t
s
(
)

	
{

	
	
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
t
h
i
s
-
>
t
h
i
s
_
p
a
g
e
_
w
i
d
g
e
t
s
)
)
 
{

	
	
	
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
!
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
p
a
r
a
m
s
[
'
w
i
d
g
e
t
s
'
]
)
 
&
&
 
!
e
m
p
t
y
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
p
a
r
a
m
s
[
'
w
i
d
g
e
t
s
'
]
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
p
a
r
a
m
s
[
'
w
i
d
g
e
t
s
'
]
 
a
s
 
$
w
i
d
g
e
t
 
=
>
 
$
w
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
w
i
d
g
e
t
s
[
$
w
i
d
g
e
t
]
)
)
 
{
 
/
/
c
h
e
c
k
 
i
f
 
w
i
d
g
e
t
 
i
s
 
s
t
i
l
l
 
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

	
	
	
	
	
$
t
h
i
s
-
>
t
h
i
s
_
p
a
g
e
_
w
i
d
g
e
t
s
[
$
w
i
d
g
e
t
]
 
=
 
a
r
r
a
y
(

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
'
c
o
l
u
m
n
'
 
=
>
 
$
w
[
'
c
o
l
u
m
n
'
]
,

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
'
p
o
s
i
t
i
o
n
'
 
=
>
 
$
w
[
'
p
o
s
i
t
i
o
n
'
]

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
)
;

	
	
	
	
}

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
i
 
=
 
1
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
d
e
f
a
u
l
t
_
w
i
d
g
e
t
s
 
a
s
 
$
w
i
d
g
e
t
 
=
>
 
$
w
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
w
i
d
g
e
t
s
[
$
w
i
d
g
e
t
]
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
t
h
i
s
_
p
a
g
e
_
w
i
d
g
e
t
s
[
$
w
i
d
g
e
t
]
 
=
 
a
r
r
a
y
(

	
	
	
	
	
	
	
	
	
	
	
	
	
'
c
o
l
u
m
n
'
 
=
>
 
$
i
,
 

	
	
	
	
	
	
	
	
	
	
	
	
	
'
p
o
s
i
t
i
o
n
'
 
=
>
 
0

	
	
	
	
	
	
	
	
	
	
	
	
	
)
;

	
	
	
	

	
	
	
	
$
i
+
+
;

	
	
	
	
}

	
	
	
}

	
	
	

	
	
	
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
p
a
r
a
m
s
[
'
w
i
d
g
e
t
s
'
]
 
=
 
$
t
h
i
s
-
>
t
h
i
s
_
p
a
g
e
_
w
i
d
g
e
t
s
;

	
	
}

	
	

	
	
a
r
r
a
y
_
m
u
l
t
i
s
o
r
t
(
$
t
h
i
s
-
>
t
h
i
s
_
p
a
g
e
_
w
i
d
g
e
t
s
)
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

	

	
/
/
g
e
n
e
r
a
t
e
 
t
h
e
 
w
i
d
g
e
t
s
 
d
r
o
p
d
o
w
n
 
T
O
D
O
:
 
m
a
k
e
 
i
t
 
a
 
d
r
o
p
d
o
w
n
 
w
i
t
h
 
c
h
e
c
k
b
o
x
e
s

	
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
w
i
d
g
e
t
s
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

	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
w
i
d
g
e
t
s
)
)
 
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

	
	

	
	
/
/
g
e
t
 
t
h
i
s
 
p
a
g
e
 
w
i
d
g
e
t
s

	
	
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
w
i
d
g
e
t
s
(
)
;

	
	

	
	
/
/
b
u
i
l
d
 
d
r
o
p
d
o
w
n

	
	
$
c
h
e
c
k
e
d
_
o
p
t
i
o
n
s
_
j
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
w
i
d
g
e
t
s
_
d
r
o
p
d
o
w
n
 
=
 
'

	
	
<
d
i
v
 
c
l
a
s
s
=
"
b
u
t
t
o
n
-
g
r
o
u
p
"
>

	
	
	
<
b
u
t
t
o
n
 
t
y
p
e
=
"
b
u
t
t
o
n
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
d
e
f
a
u
l
t
 
d
r
o
p
d
o
w
n
-
t
o
g
g
l
e
"
 
d
a
t
a
-
t
o
g
g
l
e
=
"
d
r
o
p
d
o
w
n
"
>
<
s
p
a
n
 
c
l
a
s
s
=
"
f
a
 
f
a
-
c
o
g
"
>
<
/
s
p
a
n
>
 
'
.
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
S
E
L
E
C
T
_
W
I
D
G
E
T
S
'
,
 
'
_
J
O
M
R
E
S
_
S
E
L
E
C
T
_
W
I
D
G
E
T
S
'
,
 
f
a
l
s
e
)
.
'
 
<
s
p
a
n
 
c
l
a
s
s
=
"
c
a
r
e
t
"
>
<
/
s
p
a
n
>
<
/
b
u
t
t
o
n
>

	
	
	
<
u
l
 
i
d
=
"
j
r
_
w
i
d
g
e
t
s
_
d
r
o
p
d
o
w
n
"
 
c
l
a
s
s
=
"
d
r
o
p
d
o
w
n
-
m
e
n
u
"
>

	
	
	
'
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
w
i
d
g
e
t
s
 
a
s
 
$
w
i
d
g
e
t
 
=
>
 
$
w
)
 
{

	
	
	
$
c
h
e
c
k
e
d
 
=
 
'
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
t
h
i
s
-
>
t
h
i
s
_
p
a
g
e
_
w
i
d
g
e
t
s
[
$
w
i
d
g
e
t
]
)
)
 
{

	
	
	
	
$
c
h
e
c
k
e
d
 
=
 
'
c
h
e
c
k
e
d
'
;

	
	
	
	
$
c
h
e
c
k
e
d
_
o
p
t
i
o
n
s
_
j
s
[
]
 
=
 
$
w
i
d
g
e
t
;

	
	
	
}

	
	
	

	
	
	
$
w
i
d
g
e
t
s
_
d
r
o
p
d
o
w
n
 
.
=
 
'

	
	
	
	
<
l
i
>
<
a
 
h
r
e
f
=
"
#
"
 
d
a
t
a
-
v
a
l
u
e
=
"
'
.
$
w
i
d
g
e
t
.
'
"
 
t
a
b
I
n
d
e
x
=
"
-
1
"
>
<
i
n
p
u
t
 
t
y
p
e
=
"
c
h
e
c
k
b
o
x
"
 
'
.
$
c
h
e
c
k
e
d
.
'
/
>
 
'
.
$
w
[
'
t
i
t
l
e
'
]
.
'
<
/
a
>
<
/
l
i
>

	
	
	
	
'
;

	
	
}

	
	

	
	
$
w
i
d
g
e
t
s
_
d
r
o
p
d
o
w
n
 
.
=
'

	
	
	
<
/
u
l
>

	
	
<
/
d
i
v
>

	
	
<
s
c
r
i
p
t
 
t
y
p
e
=
"
t
e
x
t
/
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
"
>

	
	
	
v
a
r
 
j
r
_
w
i
d
g
e
t
s
_
s
e
l
e
c
t
e
d
 
=
 
[
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
c
h
e
c
k
e
d
_
o
p
t
i
o
n
s
_
j
s
,
 
f
a
l
s
e
)
.
'
]
;

	
	
<
/
s
c
r
i
p
t
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
w
i
d
g
e
t
s
_
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

	

	
/
/
t
o
g
g
l
e
 
w
i
d
g
e
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
 
t
o
g
g
l
e
_
w
i
d
g
e
t
(
$
w
i
d
g
e
t
 
=
 
'
'
,
 
$
e
n
a
b
l
e
d
 
=
 
0
,
 
$
c
o
l
u
m
n
 
=
 
1
,
 
$
o
r
d
e
r
 
=
 
a
r
r
a
y
(
)
 
)

	
{

	
	
i
f
 
(
$
w
i
d
g
e
t
 
=
=
 
'
'
)
 
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
!
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

	
	

	
	
/
/
s
a
v
e
 
w
i
d
g
e
t
 
p
a
r
a
m
s
 
t
o
 
m
a
n
a
g
e
r
 
p
a
r
a
m
s

	
	
i
f
 
(
$
e
n
a
b
l
e
d
 
=
=
 
0
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
J
R
U
s
e
r
-
>
p
a
r
a
m
s
[
'
w
i
d
g
e
t
s
'
]
[
$
w
i
d
g
e
t
]
)
)
 
{

	
	
	
	
u
n
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
p
a
r
a
m
s
[
'
w
i
d
g
e
t
s
'
]
[
$
w
i
d
g
e
t
]
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
p
o
s
i
t
i
o
n
 
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
J
R
U
s
e
r
-
>
p
a
r
a
m
s
[
'
w
i
d
g
e
t
s
'
]
 
a
s
 
$
k
e
y
=
>
$
c
u
r
r
e
n
t
_
w
i
d
g
e
t
 
)
 
{

	
	
	
	
i
f
 
(
$
c
u
r
r
e
n
t
_
w
i
d
g
e
t
[
'
c
o
l
u
m
n
'
]
 
=
=
 
$
c
o
l
u
m
n
)
 
{

	
	
	
	
	
$
n
e
w
_
p
o
s
 
=
 
(
i
n
t
)
a
r
r
a
y
_
s
e
a
r
c
h
(
"
j
r
_
w
i
d
g
e
t
_
"
.
$
k
e
y
,
 
$
o
r
d
e
r
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
p
a
r
a
m
s
[
'
w
i
d
g
e
t
s
'
]
[
$
k
e
y
]
[
'
p
o
s
i
t
i
o
n
'
]
 
=
 
$
n
e
w
_
p
o
s
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
p
a
r
a
m
s
[
'
w
i
d
g
e
t
s
'
]
[
$
k
e
y
]
[
'
c
o
l
u
m
n
'
]
 
=
 
$
c
o
l
u
m
n
;

	
	
	
	
	
i
f
 
(
$
w
i
d
g
e
t
 
=
=
 
$
k
e
y
 
)
 
{

	
	
	
	
	
	
$
p
o
s
i
t
i
o
n
 
=
 
$
n
e
w
_
p
o
s
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
	

	
	
	
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
p
a
r
a
m
s
[
'
w
i
d
g
e
t
s
'
]
[
$
w
i
d
g
e
t
]
 
=
 
a
r
r
a
y
(

	
	
	
	
'
c
o
l
u
m
n
'
 
=
>
 
$
c
o
l
u
m
n
,

	
	
	
	
'
p
o
s
i
t
i
o
n
'
 
=
>
 
$
p
o
s
i
t
i
o
n

	
	
	
)
;

	
	
	

	
	
}


	
	
/
/
s
a
v
e
 
u
s
e
r
 
p
r
o
f
i
l
e
 
p
a
r
a
m
s

	
	
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
p
d
a
t
e
_
p
a
r
a
m
s
(
)
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

}

