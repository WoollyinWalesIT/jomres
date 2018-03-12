
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
 
U
t
i
l
i
t
y
 
c
l
a
s
s
 
f
o
r
 
a
l
l
 
H
T
M
L
 
d
r
a
w
i
n
g
 
c
l
a
s
s
e
s
.

 
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
H
T
M
L

{

 
 
 
 
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
v
a
l
,
 
$
t
e
x
t
 
=
 
'
'
,
 
$
v
a
l
u
e
_
n
a
m
e
 
=
 
'
v
a
l
u
e
'
,
 
$
t
e
x
t
_
n
a
m
e
 
=
 
'
t
e
x
t
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
S
E
L
E
C
T
L
I
S
T
J
A
V
A
S
C
R
I
P
T
'
)
 
&
&
 
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
 
&
&
 
!
A
J
A
X
C
A
L
L
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'

	
	
	
<
s
c
r
i
p
t
>

	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
f
u
n
c
t
i
o
n
(
j
o
m
r
e
s
J
q
u
e
r
y
)
 
{

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
d
i
v
.
b
t
n
-
g
r
o
u
p
[
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
-
n
a
m
e
=
"
*
"
]
\
'
)
.
e
a
c
h
(
f
u
n
c
t
i
o
n
(
)
{

	
	
	
	
	
v
a
r
 
g
r
o
u
p
 
 
 
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
t
h
i
s
)
;

	
	
	
	
	
v
a
r
 
f
o
r
m
 
 
 
 
=
 
g
r
o
u
p
.
p
a
r
e
n
t
s
(
\
'
f
o
r
m
\
'
)
.
e
q
(
0
)
;

	
	
	
	
	
v
a
r
 
n
a
m
e
 
 
 
 
=
 
g
r
o
u
p
.
a
t
t
r
(
\
'
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
-
n
a
m
e
\
'
)
;

	
	
	
	
	
v
a
r
 
h
i
d
d
e
n
 
 
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
i
n
p
u
t
[
n
a
m
e
=
"
\
'
 
+
 
n
a
m
e
 
+
 
\
'
"
]
\
'
,
 
f
o
r
m
)
;

	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
b
u
t
t
o
n
\
'
,
 
g
r
o
u
p
)
.
e
a
c
h
(
f
u
n
c
t
i
o
n
(
)
{

	
	
	
	
	
	

	
	
	
	
	
	
v
a
r
 
b
u
t
t
o
n
 
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
t
h
i
s
)
;

	
	
	
	
	
	
b
u
t
t
o
n
.
l
i
v
e
(
\
'
c
l
i
c
k
\
'
,
 
f
u
n
c
t
i
o
n
(
)
{

	
	
	
	
	
	
	
h
i
d
d
e
n
.
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
J
q
u
e
r
y
(
t
h
i
s
)
.
v
a
l
(
)
)
;

	
	
	
	
	
}
)
;

	
	
	
	
	
i
f
(
b
u
t
t
o
n
.
v
a
l
(
)
 
=
=
 
h
i
d
d
e
n
.
v
a
l
(
)
)
 
{

	
	
	
	
	
	
b
u
t
t
o
n
.
a
d
d
C
l
a
s
s
(
\
'
b
t
n
-
p
r
i
m
a
r
y
 
a
c
t
i
v
e
\
'
)
;

	
	
	
	
	
 
 
}

	
	
	
	
	
}
)
;

	
	
	
	
 
 
}
)
;

	
	
	
	
}
)
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

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
S
E
L
E
C
T
L
I
S
T
J
A
V
A
S
C
R
I
P
T
'
,
 
1
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
u
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
o
b
j
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
o
b
j
-
>
$
v
a
l
u
e
_
n
a
m
e
 
=
 
$
v
a
l
;

 
 
 
 
 
 
 
 
$
o
b
j
-
>
$
t
e
x
t
_
n
a
m
e
 
=
 
t
r
i
m
(
$
t
e
x
t
)
 
?
 
$
t
e
x
t
 
:
 
$
v
a
l
u
e
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
o
b
j
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
a
r
r
,
 
$
n
a
m
e
,
 
$
a
t
t
r
i
b
s
,
 
$
k
e
y
,
 
$
t
e
x
t
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
 
n
u
l
l
,
 
$
u
s
e
_
b
o
o
t
s
t
r
a
p
_
r
a
d
i
o
s
 
=
 
t
r
u
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
n
o
t
_
f
o
r
_
t
h
e
s
e
_
d
r
o
p
d
o
w
n
s
 
=
 
a
r
r
a
y
(
'
j
o
m
r
e
s
l
a
n
g
'
,
 
'
j
o
m
r
e
s
_
e
d
i
t
i
n
g
_
m
o
d
e
'
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
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
'
,
 
'
m
a
n
a
g
e
m
e
n
t
_
p
r
o
c
e
s
s
'
,
 
'
a
l
l
_
g
u
e
s
t
s
'
,
 
'
f
o
r
c
e
[
]
'
,
 
'
g
u
e
s
t
n
u
m
b
e
r
'
,
 
'
c
o
u
n
t
r
y
'
,
 
'
r
e
g
i
o
n
'
,
 
'
t
o
w
n
'
,
 
'
s
h
o
w
_
a
l
l
'
,
 
'
d
e
p
o
s
i
t
_
p
a
i
d
'
,
 
'
b
o
o
k
e
d
_
i
n
'
,
 
'
f
i
x
e
d
P
e
r
i
o
d
_
p
e
r
i
o
d
s
R
e
q
u
e
s
t
e
d
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
$
u
s
e
_
b
o
o
t
s
t
r
a
p
_
r
a
d
i
o
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
t
_
f
o
r
_
t
h
e
s
e
_
d
r
o
p
d
o
w
n
s
[
 
]
 
=
 
$
n
a
m
e
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
n
 
=
 
c
o
u
n
t
(
$
a
r
r
)
;

	
	

 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
 
|
|
 
$
n
 
!
=
 
2
 
|
|
 
i
n
_
a
r
r
a
y
(
$
n
a
m
e
,
 
$
n
o
t
_
f
o
r
_
t
h
e
s
e
_
d
r
o
p
d
o
w
n
s
)
 
|
|
 
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
t
a
s
k
'
)
 
=
=
 
'
h
a
n
d
l
e
r
e
q
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
t
t
r
i
b
s
 
=
 
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
'
,
 
'
'
,
 
$
a
t
t
r
i
b
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
t
t
r
i
b
s
 
=
 
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
-
m
e
d
i
u
m
"
'
,
 
'
'
,
 
$
a
t
t
r
i
b
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
a
t
t
r
i
b
s
 
.
=
 
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
-
m
e
d
i
u
m
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
'
;


 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
'
<
s
e
l
e
c
t
 
n
a
m
e
=
"
'
.
$
n
a
m
e
.
'
"
 
i
d
=
"
'
.
$
n
a
m
e
.
'
"
 
'
.
$
a
t
t
r
i
b
s
.
'
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
a
r
r
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

	
	
	
	
$
v
a
l
 
=
 
$
v
-
>
$
k
e
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
x
t
 
=
 
$
v
-
>
$
t
e
x
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
$
s
e
l
e
c
t
e
d
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
l
 
=
=
 
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
s
e
l
e
c
t
e
d
 
.
=
 
'
 
s
e
l
e
c
t
e
d
=
"
s
e
l
e
c
t
e
d
"
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
$
o
u
t
p
u
t
 
.
=
 
'
<
o
p
t
i
o
n
 
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
v
a
l
.
'
"
 
'
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
.
'
>
'
.
$
t
x
t
.
'
<
/
o
p
t
i
o
n
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
$
o
u
t
p
u
t
 
.
=
 
'
<
/
s
e
l
e
c
t
>
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
'
<
f
i
e
l
d
s
e
t
 
i
d
=
"
'
 
.
$
n
a
m
e
.
'
"
 
c
l
a
s
s
=
"
r
a
d
i
o
 
b
t
n
-
g
r
o
u
p
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
a
r
r
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
 
=
 
$
v
-
>
$
k
e
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
x
t
 
=
 
$
v
-
>
$
t
e
x
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
/
/
$
o
u
t
p
u
t
 
.
=
 
'
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
k
.
'
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
b
u
t
t
o
n
"
>
'
.
$
t
x
t
.
'
<
/
b
u
t
t
o
n
>
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
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
l
 
=
=
 
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
=
"
c
h
e
c
k
e
d
"
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
$
o
u
t
p
u
t
 
.
=
 
'

	
	
	
	
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
r
a
d
i
o
"
 
i
d
=
"
'
 
.
$
n
a
m
e
.
$
v
a
l
.
'
"
 
n
a
m
e
=
"
'
.
$
n
a
m
e
.
'
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
v
a
l
.
'
"
/
>

	
	
	
	
<
l
a
b
e
l
 
f
o
r
=
"
'
 
.
$
n
a
m
e
.
$
v
a
l
.
'
"
 
i
d
=
"
'
.
$
n
a
m
e
.
$
v
a
l
.
'
_
i
d
"
 
>
'
.
$
t
x
t
.
'
<
/
l
a
b
e
l
>

	
	
	
	
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
$
o
u
t
p
u
t
 
.
=
 
'
<
/
f
i
e
l
d
s
e
t
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
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
 
i
n
t
e
g
e
r
S
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
s
t
a
r
t
,
 
$
e
n
d
,
 
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
,
 
$
n
a
m
e
,
 
$
a
t
t
r
i
b
s
,
 
$
s
e
l
e
c
t
e
d
,
 
$
f
o
r
m
a
t
 
=
 
'
'
,
 
$
u
s
e
_
b
o
o
t
s
t
r
a
p
_
r
a
d
i
o
s
 
=
 
t
r
u
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
a
t
t
r
i
b
s
 
=
 
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
 
'
,
 
'
'
,
 
$
a
t
t
r
i
b
s
)
;

 
 
 
 
 
 
 
 
$
a
t
t
r
i
b
s
 
=
 
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
-
m
e
d
i
u
m
"
 
'
,
 
'
'
,
 
$
a
t
t
r
i
b
s
)
;

 
 
 
 
 
 
 
 
$
a
t
t
r
i
b
s
 
.
=
 
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
-
s
m
a
l
l
"
'
;


 
 
 
 
 
 
 
 
$
a
r
r
y
 
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
 
(
$
i
 
=
 
(
i
n
t
)
 
$
s
t
a
r
t
;
 
$
i
 
<
=
 
(
i
n
t
)
 
$
e
n
d
;
 
$
i
 
+
=
 
(
i
n
t
)
 
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
 
<
 
1
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
 
=
 
s
p
r
i
n
t
f
(
'
0
%
s
'
,
 
$
i
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
 
=
 
$
i
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
y
[
 
]
 
=
 
s
e
l
f
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
i
,
 
$
n
o
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
a
r
r
y
,
 
$
n
a
m
e
,
 
$
a
t
t
r
i
b
s
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
s
e
l
e
c
t
e
d
,
 
$
u
s
e
_
b
o
o
t
s
t
r
a
p
_
r
a
d
i
o
s
)
;

 
 
 
 
}

}

